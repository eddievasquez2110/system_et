import { Inertia } from '@inertiajs/inertia'
import React from 'react'


const Card_Software = ({item}) => {
    const removeItem = (e) =>{
        Inertia.delete(route('removeItem',e.currentTarget.id));
    }
  return (
    <div>
        <div className='mt-5 flex gap-4 align-center justify-between bg-gray-100 rounded-md p-2'>
            <span className=''>{item.software.Nombre_Software}</span>
            <button
                id={item.ID_Software}
                className='bg-red-500 rounded text-white p-2 text-sm '
                onClick={removeItem}
            >Quitar</button>
        </div>
    </div>
  )
}

export default Card_Software