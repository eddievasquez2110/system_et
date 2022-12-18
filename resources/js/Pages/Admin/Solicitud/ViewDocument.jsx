import React from 'react'
import { Head } from '@inertiajs/inertia-react';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';
import DocumentPDF from '@/Components/Solicitud/DocumentPDF';

const ViewDocument = ({auth,soli}) => {


    return (
    <>
    {auth.user.ID_Rol == 2 ?
    
      <div>
      <Head title='Visualizar PDF'/>
      {
            <DocumentPDF soli={soli}></DocumentPDF>
      }
      </div>
      
      :
      auth.user.ID_Rol == 1 ?
        <NavbarSAdmin auth={auth}>
        <Head title="Especificaciones" />
        <div className='flex flex-col h-screen items-center justify-center m-4'>    
            <div className="overflow-x-auto w-5/6 relative shadow-md sm:rounded-lg  ">
              
            </div>   
        </div>
        </NavbarSAdmin>
      :<></>
    }
    
    </>
  )
}

export default ViewDocument

