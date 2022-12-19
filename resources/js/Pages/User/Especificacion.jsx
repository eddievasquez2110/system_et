import React from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/inertia-react';
import Table from '@/Components/Table';

const Especificacion = ({especificacion,auth,equipos,id}) => {
    console.log(especificacion);
  return (
    <AuthenticatedLayout auth={auth}>
        <Head title="Especificaciones" />
        <div className='flex flex-col h-screen items-center justify-center m-4'> 
          <div className=' flex w-full justify-end  p-5'>
            <Link
                  className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                  href={ route('solicitud',equipos.ID_Tipo_Equipo) }
              >
                  Regresar
              </Link>  
          </div>
             
            <div className="overflow-x-auto w-5/6 relative shadow-md sm:rounded-lg ">
            <Table  especificacion={especificacion} equipos={equipos}/>
            </div>
        </div>
    </AuthenticatedLayout>
  )
}

export default Especificacion