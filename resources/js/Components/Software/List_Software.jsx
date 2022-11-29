import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEdit, faTrashCan} from '@fortawesome/free-solid-svg-icons';

const List_Software = ({soft}) => {
  return (
    
      <tr className="bg-white border-b">
            <th scope="row" className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                {soft.ID_Software}
            </th>
            <td className="py-4 px-6">
                {soft.Nombre_Software}
            </td>
            <td className="py-4 px-6">
                {soft.Descripcion_Software}
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

export default List_Software
