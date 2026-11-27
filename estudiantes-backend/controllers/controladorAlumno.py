from flask import Blueprint, request, jsonify
from Models.modelEstudiante import *

controladorAlumnoBP= Blueprint('controladorAlumno',__name__)

#ruta para insert
@controladorAlumnoBP.route('/guardarAlumno', methods=['POST'])
def guardar():
    nombreReq=request.form.get('txtNombre','').strip()
    carreraReq=request.form.get('txtCarrera','').strip()

    try:
        insertEstudiante(nombreReq, carreraReq)
        return jsonify({"Completado": "estudiante guardado"}), 200
    
    except Exception as e:
        return jsonify({"Error": str(e)}),500

#ruta para arranque del servidor
@controladorAlumnoBP.route('/')
def inicio():
    return 'Hola soy el Backend del Alumno'

#ruta para consulta todo
@controladorAlumnoBP.route('/consultaTodo', methods=['GET'])
def consultaTodo():
    try:
        alumnos = selectAll()
        return jsonify(alumnos), 200
    except Exception as e:
        print(f"Error: {e}")
        return jsonify({"Error": str(e)}),500
    

#ruta para actualizar
@controladorAlumnoBP.route('/actualizarAlumno', methods=['PUT'])
def actualizar():
    id = request.form.get('id', '').strip()
    nombre = request.form.get('txtNombre', '').strip()
    carrera = request.form.get('txtCarrera', '').strip()

    try:
        updateAlumno(id, nombre, carrera)
        return jsonify({"Completado": "Alumno actualizado"}), 200

    except Exception as e:
        return jsonify({"Error": str(e)}), 500
    

#ruta para eliminar
@controladorAlumnoBP.route('/eliminararAlumno', methods=['DELETE'])
def eliminar():
    id = request.form.get('id','').strip()

    try:
        deleteAlumno(id)
        return jsonify({"Completado":"Alumno Borrado"}),200
    except Exception as e:
        return jsonify({"Error": str(e)}),500
    
# ruta para buscar por ID
@controladorAlumnoBP.route('/buscarAlumno/<int:id>', methods=['GET'])
def buscarAlumno(id):
    try:
        alumno = selectById(id)

        if alumno:
            return jsonify(alumno), 200
        else:
            return jsonify({"Mensaje": "Alumno no encontrado"}), 404

    except Exception as e:
        return jsonify({"Error": str(e)}), 500