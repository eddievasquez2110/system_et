import React from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEye, faFileCircleCheck, faFileCircleXmark} from '@fortawesome/free-solid-svg-icons';
import dayjs from 'dayjs';
import { Link } from '@inertiajs/inertia-react';


//import { Popup } from 'unc-react-creator';

const List_Solicitud = ({soli}) => {

  return (
    
      <tr className="bg-white border-b">
            <td className="py-4 px-6">
                <div className='flex flex-col'>
                    {soli.ID_Solicitud_Detalle}
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
                {dayjs(soli.created_at).format('DD-MM-YYYY')}
            </td>
            <td className="py-4 px-3 text-center">
                {soli.Estado_Solicitud}
            </td>
            
            <td className="flex flex-inline py-4 place-content-center">
                <Link href={route('d.solicituds.show',soli.ID_Tipo_Equipo)} className="font-medium text-blue-500">
                    
                    <div className='justify-center bg-blue-100 px-2 py-2 rounded-md hover:bg-blue-700 hover:text-white mx-3'>
                    <FontAwesomeIcon className="h-5 w-8"  icon={faEye} style={open?{transform: 'rotate(0deg)',}:{transform: 'rotate(180deg)'}} /> 
                    </div>

                </Link>

                <Link href={route('d.solicituds.aceptar',soli.ID_Solicitud)} className="font-medium text-green-500">
                    
                    <div className='justify-center bg-green-100 px-2 py-2 rounded-md hover:bg-green-700 hover:text-white  mx-3'>
                    <FontAwesomeIcon className="h-5 w-8"  icon={faFileCircleCheck} style={open?{transform: 'rotate(0deg)',}:{transform: 'rotate(180deg)'}} /> 
                    </div>

                </Link>   

                <Link href={route('d.solicituds.rechazar',soli.ID_Solicitud)} className="font-medium text-red-500">
                    
                    <div className='justify-center bg-red-100 px-2 py-2 rounded-md hover:bg-red-700 hover:text-white mx-3'>
                    <FontAwesomeIcon className="h-5 w-8 "  icon={faFileCircleXmark} style={open?{transform: 'rotate(0deg)',}:{transform: 'rotate(180deg)'}} /> 
                    </div>

                </Link>
            
            </td>
    </tr>
  )
}

export default List_Solicitud