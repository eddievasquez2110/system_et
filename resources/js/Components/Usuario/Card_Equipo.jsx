import { Inertia } from '@inertiajs/inertia'
import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faX, faXmark } from '@fortawesome/free-solid-svg-icons';

const Card_Equipo = ({item}) => {
  const removeItem = (e) =>{
    Inertia.delete(route('removeItemEquipo',e.currentTarget.id));
  }
  
  return (
    <div>
        <div className='mt-5 flex gap-4 align-center justify-between bg-white border-2 border-white border-b-gray-200 rounded-md p-2'>
            <div className='flex gap-8'>
              <img 
                src={`../images/equipos/${item.tipoequipo.Imagen}`} 
                alt={item.tipoequipo.Nombre_Tipo_Equipo}
                className='w-32 h-32'
                />
              <div className='flex flex-col gap-4'>
                <span className='text-green-600 font-bold'>{item.tipoequipo.Nombre_Tipo_Equipo.toUpperCase()}</span>
                <span>{item.usoequipo.Nombre_Uso_Equipo}</span>
                <span>{item.Cantidad}</span>
              </div>
            </div>
            <div>
              <button
                  id={item.id}
                  className='bg-red-500 rounded text-white p-1 text-sm '
                  onClick={removeItem}
              ><FontAwesomeIcon icon={faXmark}></FontAwesomeIcon></button>
            </div> 
        </div>
    </div>
  )
}

export default Card_Equipo