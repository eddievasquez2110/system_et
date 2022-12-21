import React from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Table from '@/Components/Table';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';
const Lista = ({auth, equipos,especificacion}) => {

  const tipo = especificacion[0].ID_Tipo_Equipo;
  return (
    <>
    {auth.user.ID_Rol == 1 ?
      <NavbarSAdmin auth={auth}>
      <Head title="Especificaciones" />
      <div className='flex items-center justify-center mt-8'>    
          <div className="overflow-x-auto w-5/6 relative shadow-md sm:rounded-lg  ">
          <Table  equipos={equipos} especificacion={especificacion}/>
          </div>   
      </div>
      </NavbarSAdmin>
      :auth.user.ID_Rol == 3 ?
        <AuthenticatedLayout auth={auth}>
        <Head title="Especificaciones" />
        <div className='flex flex-col h-screen items-center justify-center m-4'>
            <div className="overflow-x-auto w-5/6 relative shadow-md sm:rounded-lg  ">
            <a href={`/reportesdos/${tipo}`} className="text-white bg-green-500 rounded p-2 mb-4" target="_blank">Imprimir</a>   
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
