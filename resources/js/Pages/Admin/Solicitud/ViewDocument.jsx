import React, { useState } from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faFileCircleCheck, faFileCircleXmark} from '@fortawesome/free-solid-svg-icons';
import { Head, Link } from '@inertiajs/inertia-react';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';
import DocumentPDF from '@/Components/Solicitud/DocumentPDF';


const ViewDocument = ({auth,solis}) => {
   
    return (
    <>
    {auth.user.ID_Rol == 2 ?
    
      <div>
      <Head title='Visualizar PDF'/>
      {
            <DocumentPDF key={solis.ID_Solicitud} solis={solis}></DocumentPDF>
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

