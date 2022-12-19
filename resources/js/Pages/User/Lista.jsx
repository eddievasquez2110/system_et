import React from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/inertia-react';
import Table from '@/Components/Table';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';
const Lista = ({auth, equipos,especificacion}) => {
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
        </AuthenticatedLayout>
      :<></>
    }
    </>
  )
}

export default Lista
