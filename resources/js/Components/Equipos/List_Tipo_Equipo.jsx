import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEdit, faTrashCan} from '@fortawesome/free-solid-svg-icons';
import Swal from 'sweetalert2'
import { Link } from '@inertiajs/inertia-react';


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
            <th scope="row" className="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                {tipo.ID_Tipo_Equipo}
            </th>
            <td className="px-4 py-2">
                {tipo.Nombre_Tipo_Equipo}
            </td>
            <td className="px-4 py-2">
                <div className='flex items-center justify-center'>
                    <img src={`../images/${tipo.Imagen}`} alt="" style={{width:'80px',height:'50px'}} />
                </div>        
            </td>
            <td className="flex gap-3 justify-center py-3 text-right ">
                <div className='flex align-center justify-center gap-4'>
                    <Link
                        tabIndex="1"
                        className="px-4 py-2 text-sm text-white bg-blue-500 rounded"
                        href={route('d.tipoequipos.edit',`${tipo.ID_Tipo_Equipo}`)}
                        ><FontAwesomeIcon className="h-4 w-5 "  icon={faEdit} />
                    </Link>

                    <div>
                        <button
                            onClick={destroy}
                            tabIndex="-1"
                            id={tipo.ID_Tipo_Equipo}
                            className="mx-1 px-4 py-2 text-sm text-white bg-red-500 rounded"
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
