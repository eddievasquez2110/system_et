import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEdit, faTrashCan} from '@fortawesome/free-solid-svg-icons';
import Swal from 'sweetalert2';
import { Inertia } from '@inertiajs/inertia';
import { Link } from '@inertiajs/inertia-react';

const List_Especificacion_Software = ({espSoftware}) => {

    function destroy(e){
        const id = e.currentTarget.id;
        console.log(id)
        Swal.fire({
          title: 'Estas seguro?',
          text: "Usted Eliminara este registro",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Eliminar'
        }).then((result) => { 
          if (result.isConfirmed) {
    
            Swal.fire(
              'Eliminado',
              'Eliminaste el registro.',
              'success'
            )
            Inertia.delete(route("d.especificacionsoftware.destroy",id));
          }
        })
    }

  return (
    
      <tr className="bg-white border-b">
            <th scope="row" className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                {espSoftware.ID_Especificacion_Software}
            </th>
            <td className="py-4 px-6">
                {espSoftware.Nombre_Software}
            </td>
            <td className="py-4 px-6">
                {espSoftware.Nombre_Uso_Equipo}
            </td>
            <td className="py-4 px-6">
                {espSoftware.Nombre_Especificacion_Software}
            </td>
            <td className="py-4 px-6">
                {espSoftware.Especificacion_Software}
            </td>
            <td className="flex gap-3 justify-center py-3 text-right ">
                <div className='flex align-center justify-center gap-4'>
                    
                    <div className='font-medium text-blue-500 pt-2'>
                      <Link
                          tabIndex="1"
                          className="bg-blue-100 px-5 py-2 rounded-md hover:bg-blue-700 hover:text-white"
                          href={route("d.especificacionsoftware.edit",`${espSoftware.ID_Especificacion_Software}`)}
                          ><FontAwesomeIcon className="h-4 w-5 "  icon={faEdit} />
                      </Link>
                    </div>

                    <div className='font-medium text-red-500 ' >
                        <button
                            onClick={destroy}
                            tabIndex="-1"
                            id={espSoftware.ID_Especificacion_Software}
                            className="bg-red-100 px-5 py-2 rounded-md hover:bg-red-700 hover:text-white"
                            type="button"
                            > <FontAwesomeIcon className="h-4 w-5 "  icon={faTrashCan} />      
                        </button>
                    </div>
                </div>
            </td>
    </tr>
  )
}

export default List_Especificacion_Software