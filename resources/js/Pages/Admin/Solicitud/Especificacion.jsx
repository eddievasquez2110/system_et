import React from 'react'
import { Head } from '@inertiajs/inertia-react';
import Table from '@/Components/Table';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';
import Navbar from '@/Layouts/Navbar';
import WinModal from '@/Components/WinModal';


const Lista = ({auth,laptops,especificacion}) => {
  return (
    <>
    {auth.user.ID_Rol == 2 ?
        <Navbar auth={auth} >
            <WinModal>
            {
              <div>
                <Table laptops={laptops} especificacion={especificacion}/>
              </div>
            }
            </WinModal>
            
        </Navbar>
      :
      auth.user.ID_Rol == 1 ?
        <NavbarSAdmin auth={auth}>
        <Head title="Especificaciones" />
        <div className='flex flex-col h-screen items-center justify-center m-4'>    
            <div className="overflow-x-auto w-5/6 relative shadow-md sm:rounded-lg  ">
              <Table  laptop={equipo} especificacion={especificacion}/>
            </div>   
        </div>
        </NavbarSAdmin>
      :<></>
    }
    
    </>
  )
}

export default Lista

