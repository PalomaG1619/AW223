
import  Estudiantes from "./components/estudiante";
import "./App.css";

export default function App() {

  const estudiantes = [
    {id: 1, nombre: "Ivan", carrera: "Sistemas"},
    {id: 2, nombre: "Reyna", carrera: "Comercio"},
    {id: 3, nombre: "Pedro", carrera: "Psicología"},
  ];
  
  return (
    <main className="contenedor">
      <h1>Lista de Estudiantes</h1>
    
      <form action="">
        <input type="text" placeholder=" Escribe nombre" />
        <input type="text" placeholder="Escribe carrera" />
        <button type="button">Agregar</button>
      </form>

      <h2> Estudiantes Registrados</h2>

      <ul>
        { estudiantes.map((estudiante) => (
           <Estudiantes 
           key={estudiante.id} 
           estudiante={estudiante} 
           />
          ))
        }
      </ul>

      <p> Total de estudiantes: {estudiantes.length} </p>
    </main>
  );
}