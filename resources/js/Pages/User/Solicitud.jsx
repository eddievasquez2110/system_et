import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Software from '@/Components/Software';
import PrimaryButton from '@/Components/PrimaryButton';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';
import Card_Software from '@/Components/Usuario/Card_Software';

const Solicitud = ({auth,softwares,items}) => {
  console.log(items);
    return (
      <>
        {auth.user.ID_Rol == 1 ?
          <NavbarSAdmin auth={auth}>
          <Head title="Solicitud" />
          <div className='mt-5 w-full h-20 backdrop-blur-sm bg-white/30 grid place-items-center'>SELECCIÓN DE PROGRAMAS</div>
                    <div className='flex'>
                      <div style={{width:"70%"}}>
                      {
                          softwares.map(software =>
                              <Software key={software.ID_Software} software={software}/>
                              )
                      }  
                      </div>
                      <div style={{width:"30%"}}>
                        s
                      </div>
                    </div>
                  <div className='p-10 flex justify-center'>
                          <PrimaryButton>Continuar</PrimaryButton>  
                  </div> 
        </NavbarSAdmin>
        :auth.user.ID_Rol == 3 ?
          <AuthenticatedLayout auth={auth}>
          <Head title="Solicitud" />
          {/* <div className='mt-5 w-full h-20 backdrop-blur-sm bg-white/30 grid place-items-center'>SELECCIÓN DE PROGRAMAS</div> */}
                  <div className=" mt-8 pb-5">
                    <div className='flex items-center justify-center'  >
                      <div className='flex gap-8' style={{width:"90%"}}>

                        <div className='flex flex-col w-2/3'>
                            <div className='text-center p-4 '>
                              <h2>Seleccion de programas</h2>
                            </div>
                            <div className='w-full mb-4'>
                              <input 
                              type="text" 
                              id='buscar'
                              className=' w-full rounded-md   py-1 text-slate-500 placeholder:text-gray-300'
                              />
                            </div>
                          
                          <div className='flex flex-wrap justify-center gap-5'>
                          {
                                softwares.map(software =>
                                    <Software key={software.ID_Software} software={software}/>
                                    )
                            }
                          </div>                      
                        </div>
                        <div className='flex flex-col w-1/3'>
                            <div className='text-center p-4 '>
                              <h2>Programas selecionados</h2>
                            </div>
                            <div className='bg-white rounded ml-4 p-6' style={{height:"400px"}}>
                              <div className=''>
                                  <span>Lista :</span>
                                  
                                  {
                                    items.map(item=>
                                    <Card_Software key={item.id} item={item}/>
                                    )
                                  }
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>    
                </div>
        </AuthenticatedLayout>
        :<></>
        }
      </>
      
    )
  }

export default Solicitud