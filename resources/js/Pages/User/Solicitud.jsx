import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Software from '@/Components/Software';
import PrimaryButton from '@/Components/PrimaryButton';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';

const Solicitud = ({auth,softwares}) => {
    return (
      <>
        {auth.user.ID_Rol == 1 ?
          <NavbarSAdmin auth={auth}>
          <Head title="Solicitud" />
          <div className='mt-5 w-full h-20 backdrop-blur-sm bg-white/30 grid place-items-center'>SELECCIÓN DE PROGRAMAS</div>
                  <div className="wrapper flex flex-wrap items-center justify-center gap-5 mt-8 pb-5">
                      {
                          softwares.map(software =>
                              <Software key={software.ID_Software} software={software}/>
                              )
                      }  
                            
                  </div>
                  <div className='p-10 flex justify-center'>
                          <PrimaryButton>Continuar</PrimaryButton>  
                  </div> 
          
        </NavbarSAdmin>
        :auth.user.ID_Rol == 3 ?
          <AuthenticatedLayout auth={auth}>
          <Head title="Solicitud" />
          <div className='mt-5 w-full h-20 backdrop-blur-sm bg-white/30 grid place-items-center'>SELECCIÓN DE PROGRAMAS</div>
                  <div className="wrapper flex flex-wrap items-center justify-center gap-5 mt-8 pb-5">
                      {
                          softwares.map(software =>
                              <Software key={software.ID_Software} software={software}/>
                              )
                      }  
                            
                  </div>
                  <div className='p-10 flex justify-center'>
                          <PrimaryButton>Continuar</PrimaryButton>  
                  </div> 
          
        </AuthenticatedLayout>
        :<></>
        }
      </>
      
    )
  }

export default Solicitud