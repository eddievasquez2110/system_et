import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faXmark} from '@fortawesome/free-solid-svg-icons';
import { Inertia } from '@inertiajs/inertia'
import React from 'react'


const Card_Software = ({item}) => {
    const removeItem = (e) =>{
        Inertia.delete(route('removeItem',e.currentTarget.id));
    }
  return (
    <div>
        <div className='mt-5 flex gap-4 align-center justify-between rounded-md p-2 align-center bg-white border-2 border-white border-b-gray-200 rounded-md p-2'>
            <span className='text-green-600'>{item.software.Nombre_Software}</span>
            <button
                id={item.id}
                className='bg-red-500 rounded text-white p-2 text-sm '
                onClick={removeItem}
            ><FontAwesomeIcon icon={faXmark}></FontAwesomeIcon></button>
        </div>
    </div>
  )
}

export default Card_Software