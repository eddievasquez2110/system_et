import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/inertia-react';
import Table from '@/Components/Table';
import { Inertia } from '@inertiajs/inertia';

const Especificacion = ({especificacion,auth,equipos}) => {
  
  const tipo = especificacion[0].ID_Tipo_Equipo;
  const uso = especificacion[0].ID_Uso_Equipo;
  const [quantity,setQuantity] =useState(1);
  const handleChange= (event)=>{
    if(event.target.value < 1){
      return setQuantity(1)
    }else{
      setQuantity(event.target.value);
    }
  }
  const handleAdd = (e) =>{
    e.preventDefault();
    Inertia.post(route('addToCartEquipo',tipo),
    {quantity:quantity,uso:uso}
    );
}
  
  return (
    <AuthenticatedLayout auth={auth}>
        <Head title="Especificaciones" />
        <div className='flex flex-col h-screen items-center m-4'>
        <div className='flex items-center w-5/6  justify-between mb-1 mt-2'>
                <div className='p-1 transition duration-150 ease-in-out hover:scale-110 '> 
                  <a href={`/reportes/${tipo}/${uso}`} 
                  className="text-white bg-green-500 rounded p-2 mb-4  hover:bg-cyan-600" 
                  target="_blank">
                    Imprimir
                  </a>
                </div>
               <div className='flex items-center gap-4 p-1'>
                <div>
                  <label 
                      htmlFor="quantity"
                      className='mr-1'
                    >Cantidad:</label>
                    <input 
                    type="number"
                    id='quantity'
                    value={quantity}
                    name="quantity"
                    className='p-1 w-12 rounded border border-color-slate-500 text-gray-900'
                    onChange={handleChange}
                    />
                  </div>
                  <div className='transition duration-150 ease-in-out hover:scale-110 text-white bg-green-500 rounded p-2'>
                    <button
                    onClick={handleAdd}
                    >Añadir</button>
                  </div>     
               </div>
            </div>
          <div className="overflow-x-auto w-5/6 relative shadow-md sm:rounded-lg">
          <Table  especificacion={especificacion} equipos={equipos}/>
          </div>
        </div>
    </AuthenticatedLayout>
  )
}

export default Especificacion