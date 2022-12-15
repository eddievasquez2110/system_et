import { Inertia } from '@inertiajs/inertia'
import React from 'react'


const Card_Software = ({item}) => {
    const removeItem = (e) =>{
        Inertia.delete(route('removeItem',e.currentTarget.id));
    }
  return (
    <div>
        <div className='flex gap-4 mb-3 align-center justify-start'>
            <span>{item.software.Nombre_Software}</span>
            <button
                id={item.ID_Software}
                className='bg-red-500 rounded text-white p-1 '
                onClick={removeItem}
            >Quitar</button>
        </div>
    </div>
  )
}

export default Card_Software