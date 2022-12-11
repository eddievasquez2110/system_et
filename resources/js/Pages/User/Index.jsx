import React from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head,Link } from '@inertiajs/inertia-react';
import Equipo from '@/Components/Equipo';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';
const User = ({auth,equipos}) => {
  return (
    <>
      {auth.user.ID_Rol == 1 ?
        <NavbarSAdmin auth={auth}>
          <Head title="Inicio" />
          <div className='mt-5 w-full h-20 backdrop-blur-sm bg-white/30 grid place-items-center'>SELECCIÓN DE EQUIPOS</div>
          <div className="wrapper flex flex-wrap justify-center items-center gap-5 mt-8 pb-5">
                {
                    equipos.map(equipo =>
                        <Equipo key={equipo.ID_Tipo_Equipo} equipo={equipo}/>
                        )
                }
          </div>
        </NavbarSAdmin>
        :auth.user.ID_Rol == 3 ?
          <AuthenticatedLayout auth={auth}>
            <Head title="Inicio" />
            <div className='flex mt-5 h-20 bg-white/30  place-items-center'>
            <h1 className='flex justify-center grow ml-60'>SELECCIÓN DE EQUIPOS</h1>
            <div className='mr-10'>
                            <Link
                                className="px-6 py-2 text-white bg-green-500 rounded-md focus:outline-none"
                                href={route("d.userequipos.create")}
                                >
                                Agregar nuevo 
                            </Link>
                        </div>
            </div>
            <div className="wrapper flex flex-wrap justify-center items-center gap-5 mt-8 pb-5">
                  {
                      equipos.map(equipo =>
                          <Equipo key={equipo.ID_Tipo_Equipo} equipo={equipo}/>
                          )
                  }
            </div>
          </AuthenticatedLayout>
        :<></>
      }
        </>
    );
    
}

export default User

