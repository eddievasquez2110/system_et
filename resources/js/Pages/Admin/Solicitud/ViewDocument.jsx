import React, { useState } from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faFileCircleCheck, faFileCircleXmark} from '@fortawesome/free-solid-svg-icons';
import { Head, Link } from '@inertiajs/inertia-react';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';
import DocumentPDF from '@/Components/Solicitud/DocumentPDF';

const ViewDocument = ({auth,solis}) => {
    console.log(solis)

    return (
    <>
    {auth.user.ID_Rol == 2 ?
    
      <div>
      <Head title='Visualizar PDF'/>

      <div className='bg-zinc-800 p-5 place-content-between inline-flex w-full'>
    
        <div className='inline-flex'>
          <Link href={route('d.solicituds')} className="font-medium text-blue-500 font-bold">
            <div className='justify-center bg-blue-100 px-2 py-2 rounded-md hover:bg-blue-700 hover:text-white  mx-3'>
                VOLVER
            </div>
            
          </Link>
        </div>
      </div>

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

