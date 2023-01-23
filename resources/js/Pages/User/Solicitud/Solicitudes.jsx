import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEye, faFileCircleCheck, faFileCircleXmark} from '@fortawesome/free-solid-svg-icons';
import dayjs from 'dayjs';
import { Link } from '@inertiajs/inertia-react';


const Solicitudes = ({soli}) => {
    
    
  return (
    
      <tr className="bg-white border-b">
            <td className="py-4 px-4 md:px-6">
                <div className='flex flex-col'>
                    {soli.Cantidad_Equipo}
                </div>
            </td>
            <td className="py-4 px-4 md:px-6 ">
                <div className='flex flex-col'>
                    {soli.Nombre_Tipo_Equipo}
                </div>
            </td>
            <td className="py-4 px-1 md:px-6 ">
                <div className='flex flex-col text-center'>     
                    {soli.users.email}
                </div>
            </td>
            <td className="py-2 px-4 md:px-6 justify-center ">
                <Link 
                className='text-green-600 hover:text-green-500'
                href={route('proyecto.ver',soli.ID_Solicitud)}>
                    <div className='flex items-center justify-center '>
                        {soli.Proyecto}
                    </div> 
                </Link>       
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
                <a href={route('solicituds.ver',soli.ID_Solicitud)} className="font-medium text-blue-500 justify-center bg-blue-100 px-2 py-2 rounded-md hover:bg-blue-700 hover:text-white mx-3" target="_blank">
                 <FontAwesomeIcon className="h-5 w-8"  icon={faEye}/> 
                </a>
            
            </td>
    </tr>
  )
}

export default Solicitudes