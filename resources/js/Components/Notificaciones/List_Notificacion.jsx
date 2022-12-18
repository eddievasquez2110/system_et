import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEdit, faTrashCan} from '@fortawesome/free-solid-svg-icons';
import Swal from 'sweetalert2'
import { Link } from '@inertiajs/inertia-react';
import dayjs from 'dayjs'
import { Inertia } from '@inertiajs/inertia';


const List_Notificacion = ({noti,countNoti}) => {
    function destroy(e){
        const id = e.currentTarget.id;
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
            Inertia.delete(route("notificaciones.destroy",id));
          }
        })
    }
  
    return (
      <tr className="bg-white border-b">
            
            <td className="py-4 px-6">
                {noti.Nombre_User}
            </td>
            <td className="py-4 px-6">
                {noti.Email_User}
            </td>
            <td className="py-4 px-6">
                {noti.Asunto_User}
            </td>
            <td className="py-4 px-6">
                {noti.Mensaje_User}
            </td>
            <td className="py-4 px-6">
                {dayjs(noti.created_at).format('DD-MM-YYYY')}
            </td>
            
            <td className="flex gap-3 justify-center py-3 text-right ">
                <div className='flex align-center justify-center gap-4'>

                    <div className='font-medium text-red-500 ' >
                        <button
                            onClick={destroy}
                            tabIndex="-1"
                            id={noti.id}
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

export default List_Notificacion