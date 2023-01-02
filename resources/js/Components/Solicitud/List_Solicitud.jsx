import React, { useState } from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEye, faFileCircleCheck, faFileCircleXmark} from '@fortawesome/free-solid-svg-icons';
import dayjs from 'dayjs';
import { Link } from '@inertiajs/inertia-react';
import Swal from 'sweetalert2';
import { Inertia } from '@inertiajs/inertia';


//import { Popup } from 'unc-react-creator';

const List_Solicitud = ({soli}) => {
    const aceptar = (e) => {
        Swal.fire({
            title: 'Estas seguro?',
            text: "Usted Aceptará la solicitud",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#15803D',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar'
          }).then((result) => { 
            if (result.isConfirmed) {
              Swal.fire(
                'Cambios realizados correctamente!',
                '',
                'success'
              )
              Inertia.post(route('d.solicituds.aceptar',soli.ID_Solicitud))
            }
          })
    }
    const rechazar = (e) => {
        Swal.fire({
            title: 'Estas seguro?',
            text: "Usted Rechazará la solicitud",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#15803D',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar'
          }).then((result) => { 
            if (result.isConfirmed) {
              Swal.fire(
                'Cambios realizados correctamente!',
                '',
                'success'
              )
              Inertia.get(route('d.solicituds.rechazar',soli.ID_Solicitud))
            }
          })
    }
    
  return (
    
      <tr className="bg-white border-b">
            <td className="py-4 px-4 md:px-6">
                <div className='flex flex-col'>
                    {soli.ID_Solicitud}
                </div>
            </td>
            <td className="py-4 px-4 md:px-6 ">
                <div className='flex flex-col'>
                    {soli.users.name}
                </div>
            </td>
            <td className="py-4 px-1 md:px-6 ">
                <div className='flex flex-col text-center'>     
                    {soli.users.email}
                </div>
            </td>
            <td className="py-2 px-4 md:px-6 justify-center ">
                <div className='flex items-center justify-center '>
                    {soli.Documento}
                </div>        
            </td>
            <td className="py-4 px-2 md:px-4 text-center">
                <div className='flex flex-col text-center'>
                    {dayjs(soli.created_at).format('DD-MM-YYYY')}
                </div>
            </td>
            <td className="py-4 px-3 md:px-4 text-center">
                <div className='flex flex-col text-center'>
                    {
                        soli.Estado_Solicitud=='Aceptado'?
                            <div className='text-green-500 font-bold'>{soli.Estado_Solicitud}</div>
                        :soli.Estado_Solicitud=='Rechazado'?
                            <div className='text-red-600 font-bold'>{soli.Estado_Solicitud}</div>
                        : soli.Estado_Solicitud=='Pendiente'?
                            <div className='text-blue-600 font-bold'>{soli.Estado_Solicitud}</div>
                        :<></>
                    }
                    
                </div>
            </td>
            
            <td className="flex flex-inline py-4 place-content-center">
                <a href={route('d.solicituds.ver',soli.ID_Solicitud)} className="font-medium text-blue-500 justify-center bg-blue-100 px-2 py-2 rounded-md hover:bg-blue-700 hover:text-white mx-3" target="_blank">
                 <FontAwesomeIcon className="h-5 w-8"  icon={faEye}/> 
                </a>
                
                <Link onClick={aceptar} className="font-medium text-green-500">           
                    <div className='justify-center bg-green-100 px-2 py-2 rounded-md hover:bg-green-700 hover:text-white  mx-3'>
                    <FontAwesomeIcon className="h-5 w-8"  icon={faFileCircleCheck}  /> 
                    </div>
                </Link>   

                <Link onClick={rechazar}  className="font-medium text-red-500">             
                    <div className='justify-center bg-red-100 px-2 py-2 rounded-md hover:bg-red-700 hover:text-white mx-3'>
                    <FontAwesomeIcon className="h-5 w-8 "  icon={faFileCircleXmark}/> 
                    </div>
                </Link>
            
            </td>
    </tr>
  )
}

export default List_Solicitud