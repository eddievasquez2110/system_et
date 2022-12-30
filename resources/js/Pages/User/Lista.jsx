import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/inertia-react';
import Table from '@/Components/Table';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';
import { Inertia } from '@inertiajs/inertia';
import Swal from 'sweetalert2';

const Lista = ({auth, equipos,especificacion}) => {

  const tipo = especificacion[0].ID_Tipo_Equipo;
  const [quantity,setQuantity] =useState(1);
  const handleChange= (event)=>{
    if(event.target.value < 1){
      return setQuantity(1);
    }else{
      setQuantity(event.target.value);
    }
  }
  const handleAdd = (e) =>{
    Swal.fire({
      title: 'Estas seguro?',
      text: "Usted Aceptará la solicitud",
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
        Inertia.get(route('carritoindex'));
      }
      
    })
      
  }
  return (
    <>
    {auth.user.ID_Rol == 1 ?
      <NavbarSAdmin auth={auth}>
      <Head title="Especificaciones" />
      <div className='flex h-screen items-center justify-center'>    
          <div className="w-5/6 relative ">
            <div className=' flex w-full justify-end  p-5'>
                <Link
                    className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                    href={ route('solicitud',equipos.ID_Tipo_Equipo) }
                >
                    Regresar
                </Link>  
            </div>
            <div className='shadow-md sm:rounded-lg overflow-x-auto ' >
              <Table equipos={equipos} especificacion={especificacion}/>
            </div>
          </div>   
      </div>
      
      </NavbarSAdmin>
      :auth.user.ID_Rol == 3 ?
        <AuthenticatedLayout auth={auth}>
        <Head title="Especificaciones" />
        <div className='flex flex-col h-screen items-center justify-center m-4'>
            <div className='flex items-center w-5/6  justify-between mb-1 mt-2'>
                <div className='p-1 transition duration-150 ease-in-out hover:scale-110 '> 
                <a href={`/reportesdos/${tipo}`} 
                className="text-white bg-green-500 rounded p-2 mb-4 hover:bg-cyan-600" 
                target="_blank">
                  Descargar
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
            <div className="overflow-x-auto w-5/6 relative shadow-md sm:rounded-lg  ">
            <Table  equipos={equipos} especificacion={especificacion}/>
            </div>   
        </div>
        </AuthenticatedLayout>
      :<></>
    }
    </>
  )
}

export default Lista
