import React from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Table from '@/Components/Table';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';
const Lista = ({auth, laptops,especificacion}) => {
  return (
    <>
    {auth.user.ID_Rol == 1 ?
      <NavbarSAdmin auth={auth}>
      <Head title="Especificaciones" />
      <div className='flex items-center justify-center mt-8'>    
          <div className="overflow-x-auto w-5/6 relative shadow-md sm:rounded-lg  ">
          <Table  laptops={laptops} especificacion={especificacion}/>
          </div>   
      </div>
      </NavbarSAdmin>
      :auth.user.ID_Rol == 3 ?
        <AuthenticatedLayout auth={auth}>
        <Head title="Especificaciones" />
        <div className='flex items-center justify-center mt-8'>    
            <div className="overflow-x-auto w-5/6 relative shadow-md sm:rounded-lg  ">
            <Table  laptops={laptops} especificacion={especificacion}/>
            </div>   
        </div>
        </AuthenticatedLayout>
      :<></>
    }
    
    </>
  )
}

export default Lista
