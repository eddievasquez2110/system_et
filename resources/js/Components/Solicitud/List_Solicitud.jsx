import React from 'react';
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
              Inertia.get(route('d.solicituds.aceptar',soli.ID_Solicitud))
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
            <td className="py-4 px-6">
                <div className='flex flex-col'>
                    {soli.ID_Solicitud}
                </div>
            </td>
            <td className="py-4 px-6">
                <div className='flex flex-col'>
                    {soli.name}
                </div>
            </td>
            <td className="py-4 px-2">
                <div className='flex flex-col'>
                    {soli.Nombre_Oficina}
                </div>
            </td>
            <td className="py-4 px-6">
                <div className='flex flex-col text-center'>
                    {soli.Nombre_Tipo_Equipo}
                </div>
            </td>
            
            <td className="py-4 px-2 text-center">
                <div className='flex flex-col text-center'>
                    {dayjs(soli.Fecha_Solicitud).format('DD-MM-YYYY')}
                </div>
            </td>
            <td className="py-4 px-3 text-center">
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
                <Link href={route('d.solicituds.show',soli.ID_Tipo_Equipo)} className="font-medium text-blue-500">
                    
                    <div className='justify-center bg-blue-100 px-2 py-2 rounded-md hover:bg-blue-700 hover:text-white mx-3'>
                    <FontAwesomeIcon className="h-5 w-8"  icon={faEye} style={open?{transform: 'rotate(0deg)',}:{transform: 'rotate(180deg)'}} /> 
                    </div>

                </Link>

                <Link onClick={aceptar} className="font-medium text-green-500">
                    
                    <div className='justify-center bg-green-100 px-2 py-2 rounded-md hover:bg-green-700 hover:text-white  mx-3'>
                    <FontAwesomeIcon className="h-5 w-8"  icon={faFileCircleCheck} style={open?{transform: 'rotate(0deg)',}:{transform: 'rotate(180deg)'}} /> 
                    </div>

                </Link>   

                <Link onClick={rechazar}  className="font-medium text-red-500">
                    
                    <div className='justify-center bg-red-100 px-2 py-2 rounded-md hover:bg-red-700 hover:text-white mx-3'>
                    <FontAwesomeIcon className="h-5 w-8 "  icon={faFileCircleXmark} style={open?{transform: 'rotate(0deg)',}:{transform: 'rotate(180deg)'}} /> 
                    </div>

                </Link>
            
            </td>
    </tr>
  )
}

export default List_Solicitud