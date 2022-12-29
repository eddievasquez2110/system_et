import { Inertia } from '@inertiajs/inertia'
import React from 'react'

const Card_Equipo = ({item}) => {
  const removeItem = (e) =>{
    Inertia.delete(route('removeItemEquipo',e.currentTarget.id));
  }
  
  return (
    <div>
        <div className='mt-5 flex gap-4 align-center justify-between bg-gray-100 rounded-md p-2'>
            <div className='flex gap-8'>
              <img 
                src={`../images/equipos/${item.tipoequipo.Imagen}`} 
                alt={item.tipoequipo.Nombre_Tipo_Equipo}
                className='w-32 h-32'
                />
              <div className='flex flex-col gap-4'>
                <span>{item.tipoequipo.Nombre_Tipo_Equipo}</span>
                <span>{item.usoequipo.Nombre_Uso_Equipo}</span>
                <span>{item.Cantidad}</span>
              </div>
            </div>
            <div>
              <button
                  id={item.id}
                  className='bg-red-500 rounded text-white p-2 text-sm '
                  onClick={removeItem}
              >Quitar</button>
            </div> 
        </div>
    </div>
  )
}

export default Card_Equipo