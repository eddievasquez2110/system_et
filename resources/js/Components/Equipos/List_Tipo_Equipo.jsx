import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEdit, faTrashCan} from '@fortawesome/free-solid-svg-icons';
import Swal from 'sweetalert2'
import { Link } from '@inertiajs/inertia-react';
import { Inertia } from '@inertiajs/inertia';


const List_Tipo_Equipo = ({tipo}) => {
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
            Inertia.delete(route("d.tipoequipos.destroy",id));
          }
        })
    }

    return (
    
      <tr className="bg-white border-b">
            <td className="px-6 py-2">
                {tipo.ID_Tipo_Equipo}
            </td>
            <td className="px-6 py-2">
                {tipo.Nombre_Tipo_Equipo.toUpperCase()}
            </td>
            <td className="px-3 py-2 justify-center ">
                <div className='flex items-center justify-center'>
                    <img src={`/images/equipos/${tipo.Imagen}`} alt="" style={{width:'80px',height:'50px'}} />
                </div>        
            </td>
            <td className="px-4 py-2">
                {tipo.Editor_Equipo}
            </td>
            <td className="flex gap-3 justify-center py-3 text-right p-4">
                <div className='flex align-center justify-center gap-4'>
                    
                    <div className='font-medium text-blue-500 pt-2'>
                      <Link
                          tabIndex="1"
                          className="bg-blue-100 px-5 py-2 rounded-md hover:bg-blue-700 hover:text-white"
                          href={route("d.tipoequipos.edit",`${tipo.ID_Tipo_Equipo}`)}
                          ><FontAwesomeIcon className="h-4 w-5 "  icon={faEdit} />
                      </Link>
                    </div>

                    <div className='font-medium text-red-500 ' >
                        <button
                            onClick={destroy}
                            tabIndex="-1"
                            id={tipo.ID_Tipo_Equipo}
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

export default List_Tipo_Equipo
