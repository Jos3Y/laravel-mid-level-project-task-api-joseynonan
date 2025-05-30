<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/tasks",
     *     summary="Obtener lista de tareas",
     *     tags={"Tasks"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de tareas retornada correctamente"
     *     )
     * )
     */
    public function index()
    {
        //
    }

    /**
     * @OA\Post(
     *     path="/api/tasks",
     *     summary="Crear una nueva tarea",
     *     tags={"Tasks"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"project_id","title","status","priority","due_date"},
     *             @OA\Property(property="project_id", type="string", format="uuid", example="123e4567-e89b-12d3-a456-426614174000"),
     *             @OA\Property(property="title", type="string", example="Tarea importante"),
     *             @OA\Property(property="description", type="string", example="Descripción opcional"),
     *             @OA\Property(property="status", type="string", enum={"pending","in_progress","done"}, example="pending"),
     *             @OA\Property(property="priority", type="string", enum={"low","medium","high"}, example="high"),
     *             @OA\Property(property="due_date", type="string", format="date", example="2025-06-15")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Tarea creada"
     *     )
     * )
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\Get(
     *     path="/api/tasks/{id}",
     *     summary="Mostrar detalle de una tarea",
     *     tags={"Tasks"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de la tarea",
     *         required=true,
     *         @OA\Schema(type="string", format="uuid")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Detalle de la tarea"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Tarea no encontrada"
     *     )
     * )
     */
    public function show(string $id)
    {
        //
    }

    /**
     * @OA\Put(
     *     path="/api/tasks/{id}",
     *     summary="Actualizar tarea",
     *     tags={"Tasks"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de la tarea",
     *         required=true,
     *         @OA\Schema(type="string", format="uuid")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"project_id","title","status","priority","due_date"},
     *             @OA\Property(property="project_id", type="string", format="uuid", example="123e4567-e89b-12d3-a456-426614174000"),
     *             @OA\Property(property="title", type="string", example="Tarea importante"),
     *             @OA\Property(property="description", type="string", example="Descripción opcional"),
     *             @OA\Property(property="status", type="string", enum={"pending","in_progress","done"}, example="pending"),
     *             @OA\Property(property="priority", type="string", enum={"low","medium","high"}, example="high"),
     *             @OA\Property(property="due_date", type="string", format="date", example="2025-06-15")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Tarea actualizada"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Tarea no encontrada"
     *     )
     * )
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * @OA\Delete(
     *     path="/api/tasks/{id}",
     *     summary="Eliminar tarea",
     *     tags={"Tasks"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID de la tarea",
     *         required=true,
     *         @OA\Schema(type="string", format="uuid")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Tarea eliminada"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Tarea no encontrada"
     *     )
     * )
     */
    public function destroy(string $id)
    {
        //
    }
}
