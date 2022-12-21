import React from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/inertia-react';
import Table from '@/Components/Table';
import { Inertia } from '@inertiajs/inertia';
const Especificacion = ({especificacion,auth,equipos}) => {
  const tipo = especificacion[0].ID_Tipo_Equipo;
  const uso = especificacion[0].ID_Uso_Equipo;
  return (
    <AuthenticatedLayout auth={auth}>
        <Head title="Especificaciones" />
        <div className='flex flex-col h-screen items-center m-4'>
          <div className='flex items-end'>
          <a href={`/reportes/${tipo}/${uso}`} className="text-white bg-green-500 rounded p-2 mb-4" target="_blank">Descargar</a>     
          </div>
          <div className="overflow-x-auto w-5/6 relative shadow-md sm:rounded-lg">
          <Table  especificacion={especificacion} equipos={equipos}/>
          </div>
        </div>
    </AuthenticatedLayout>
  )
}

export default Especificacion