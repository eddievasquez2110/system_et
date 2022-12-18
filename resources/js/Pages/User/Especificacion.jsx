import React from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Table from '@/Components/Table';
const Especificacion = ({especificacion,auth,equipos}) => {
    console.log(especificacion);
  return (
    <AuthenticatedLayout auth={auth}>
        <Head title="Especificaciones" />
        <div className='flex flex-col h-screen items-center justify-center m-4'>    
            <div className="overflow-x-auto w-5/6 relative shadow-md sm:rounded-lg  ">
            <Table  especificacion={especificacion} equipos={equipos}/>
            </div>
        </div>
    </AuthenticatedLayout>
  )
}

export default Especificacion