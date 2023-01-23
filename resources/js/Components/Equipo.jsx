import { Inertia } from '@inertiajs/inertia'
import React from 'react'
const Equipo = ({equipo,auth}) => {
    
    const viewListSoft = (e) => {
        Inertia.get(route('solicitud',e.currentTarget.id));
    }

  return (
      <div className="max-w-xs bg-white rounded-lg shadow-md shadow-green-400/50 hover:shadow-lg hover:shadow-green-400">
        <div className="p-3 pt-0 ">
        { equipo.ID_Tipo_Equipo == '1' || equipo.ID_Tipo_Equipo == '2' ?
            <>
            <a href={route('solicitud',equipo.ID_Tipo_Equipo)}>
                <img src={`../images/equipos/${equipo.Imagen}`} className='rounded-t-lg w-96 h-64 mt-4 hover:scale-110 p-4' alt="" />
            </a>
            <a href="#">
                <h5 className="flex justify-center items-center h-20 text-2xl font-bold tracking-tight text-green-600 text-center">{equipo.Nombre_Tipo_Equipo.toUpperCase()}</h5>
            </a>
                    
            <button onClick={viewListSoft} id={equipo.ID_Tipo_Equipo}  className="inline-flex items-center justify-center py-5 w-full bg-green-700 border border-transparent rounded-md font-bold text-xs text-white tracking-widest active:bg-green-900 hover:bg-green-600 transition ease-in-out duration-150">
                Ir
                <svg aria-hidden="true" className="ml-2 -mr-1 w-4 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"></path></svg>
            </button>
            </>
            : <>
            <a href={route('inicio.show',equipo.ID_Tipo_Equipo)}>
                <img src={`../images/equipos/${equipo.Imagen}`} className='rounded-t-lg w-96 h-64 mt-4 hover:scale-110 p-4' alt="" />
            </a>
            <a href="#">
                <h5 className="flex justify-center items-center h-20 text-2xl font-bold tracking-tight text-green-600 text-center">{equipo.Nombre_Tipo_Equipo.toUpperCase()}</h5>
            </a>
                    
            <a href={route('inicio.show',{id: `${equipo.ID_Tipo_Equipo}`})}  className="inline-flex items-center justify-center py-5 w-full bg-green-700 border border-transparent rounded-md font-bold text-xs text-white tracking-widest active:bg-green-900 hover:bg-green-600 transition ease-in-out duration-150">
                Ir
                <svg aria-hidden="true" className="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"></path></svg>
            </a>
            </>
        } 
        </div>
      </div>
  )
}

export default Equipo