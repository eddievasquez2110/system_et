import { Inertia } from '@inertiajs/inertia'
import React from 'react'



const Software = ({software}) => {
  
  const addToCart = () =>{
    Inertia.post(route('addToCart',`${software.ID_Software}`));
  }

  return (
      
            <div className="relative md:max-w-xs min-[200px]:w-40 flex flex-col items-center justify-center bg-white rounded-lg border-2 border-neutral-100 shadow-md shadow-lime-800/50 hover:border-2 hover:border-green-400
                " >
                <div className='p-2'>
                <img src={`../images/softwares/${software.ID_Software}.png`} className='mt-3 h-36 w-44' alt="" />
                </div>
                <button
                className='items-center justify-center py-3 w-full bg-green-700 border border-transparent rounded-md font-bold text-xs text-white tracking-widest active:bg-green-900 hover:bg-green-600'
                type='button'
                onClick={addToCart}>
                        <span >Agregar</span>           
                </button>
                <span className='absolute top-1 leading-4 font-bold bg-green-700 text-white rounded-2xl px-2 left-2' style={{fontSize:"11px"}}>{software.Nombre_Software}</span>
            </div>
  )
}

export default Software