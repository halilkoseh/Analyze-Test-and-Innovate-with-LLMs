<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CodeController extends Controller
{
    public function compile(Request $request)
    {
        $code = $request->input('code');
        $uniqueId = uniqid();
        $filename = "user_code_{$uniqueId}.c";
        $filepath = storage_path("app/public/{$filename}");
        $executable = storage_path("app/public/user_code_{$uniqueId}.out");

        file_put_contents($filepath, $code);

        $output = [];
        $returnVar = null;
        exec("gcc $filepath -o $executable 2>&1", $output, $returnVar);

        if ($returnVar !== 0) {
            return response()->json([
                'output' => implode("\n", $output),
                'file' => $filename,
                'message' => 'Compilation failed!'
            ], 400);
        }

        $output = [];
        exec("$executable 2>&1", $output, $returnVar);

        if ($returnVar !== 0) {
            return response()->json([
                'output' => implode("\n", $output),
                'file' => $filename,
                'message' => 'Execution failed!'
            ], 400);
        }

        return response()->json([
            'output' => implode("\n", $output),
            'file' => $filename
        ]);
    }

}
