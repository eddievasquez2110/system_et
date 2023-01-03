import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Table from '@/Components/Table';
import { Inertia } from '@inertiajs/inertia';
import Swal from 'sweetalert2';
import { faPrint, faFileArrowDown, faPlus,faMinus} from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

const Lista = ({auth, equipos,especificacion}) => {

  
  const tipo = especificacion[0].ID_Tipo_Equipo;
  const uso = especificacion[0].ID_Uso_Equipo;
  const [quantity,setQuantity] =useState(1);

  const handleIncrement = () => {
    setQuantity(quantity + 1)
  }
  const handleDecrement = () => {
    setQuantity(quantity - 1)
  }
  if(quantity<1){
    setQuantity(1);
  }


  const handleAdd = (e) =>{
    Swal.fire({
      title: 'Estas seguro?',
      text: "Usted enviará al Carrito este equipo",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#15803D',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar'
    }).then((result) => { 
      if (result.isConfirmed) {
        Swal.fire(
          'Enviado al carrito correctamente!',
          '',
          'success'
        )
        e.preventDefault();
        Inertia.post(route('addToCartEquipo',tipo),
        {quantity:quantity,uso:4},
        );
      }
    })  
  }

  return (
     <AuthenticatedLayout auth={auth}>
     
     <Head title="Especificaciones" />
        <div className='flex flex-col h-screen items-center m-4'>
        <div className='flex items-center w-5/6  justify-between mb-1 mt-2'>
          <div className='flex inline-flex p-1 space-x-2 md:space-x-5'> 
            <div className='transition duration-150 ease-in-out hover:scale-110'>
              <a href={`/reportes/${tipo}/${uso}`} 
              className="flex text-white bg-green-500 rounded p-3 mb-4 hover:bg-green-700" 
              target="_blank">
              <FontAwesomeIcon className='h-5 w-5' icon={faPrint} ></FontAwesomeIcon>
              <label className='ml-2 hidden md:block'>Imprimir</label>
              </a>
            </div>
            <div className='transition duration-150 ease-in-out hover:scale-110'>
              <a href={`/reportes/download/${tipo}/${uso}`} 
              className="flex text-white bg-green-500 rounded p-3 mb-4 hover:bg-green-700" 
              target="_blank">
                <FontAwesomeIcon className='h-5 w-5' icon={faFileArrowDown} ></FontAwesomeIcon>
              <label className='ml-2 hidden md:block'>Descargar</label>
              </a>
            </div>
          </div>
                
          <div className='flex items-center gap-4 p-1 items-center justify-center'>
            <div className='flex gap-4 '>
                <button
                className='rounded-full text-lg font-semibold text-green-500 w-8 h-8 bg-white'
                onClick={handleIncrement}
                ><FontAwesomeIcon icon={faPlus} /></button>
                <span>{quantity}</span>
                <button
                className='rounded-full text-lg font-semibold text-green-500 w-8 h-8 bg-white'
                onClick={handleDecrement}
                ><FontAwesomeIcon icon={faMinus} /></button>
            </div>
              <div className='transition duration-150 ease-in-out hover:scale-110 text-white bg-green-500 rounded p-3 hover:bg-green-700'>
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

export default Lista
