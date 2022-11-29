import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEdit, faTrashCan} from '@fortawesome/free-solid-svg-icons';

const List_Tipo_Equipo = ({tipo}) => {
  return (
    
      <tr className="bg-white border-b">
            <th scope="row" className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                {tipo.ID_Tipo_Equipo}
            </th>
            <td className="py-4 px-6">
                {tipo.Nombre_Tipo_Equipo}
            </td>
            <td className="flex gap-3 justify-center py-3 text-right ">
                <a href="#" className="font-medium text-blue-500">
                    <div className='bg-blue-100 px-5 py-2 rounded-md hover:bg-blue-700 hover:text-white'>
                        <FontAwesomeIcon className="h-4 w-5 "  icon={faEdit} />
                    </div>
                </a>
                <a href="#" className="font-medium text-red-500 ">
                    <div className='bg-red-100 px-5 py-2 rounded-md hover:bg-red-700 hover:text-white'>
                        <FontAwesomeIcon className="h-4 w-5 "  icon={faTrashCan} />
                    </div>
                </a>
            </td>
    </tr>
  )
}

export default List_Tipo_Equipo
