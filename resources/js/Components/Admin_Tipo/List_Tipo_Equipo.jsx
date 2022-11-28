import React from 'react'

const List_Tipo_Equipo = ({tipo}) => {
  return (
    
      <tr className="bg-white border-b ">
                                    <th scope="row" className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                        {tipo.ID_Tipo_Equipo}
                                    </th>
                                    <td className="py-4 px-6">
                                        {tipo.Nombre_Tipo_Equipo}
                                    </td>
                                    <td className="flex gap-4 justify-center py-4 px-2 text-right">
                                        <a href="#" className="font-medium text-blue-600 hover:underline">Edit</a>
                                        <a href="#" className="font-medium text-red-600 hover:underline">Delete</a>
                                    </td>
    </tr>
  )
}

export default List_Tipo_Equipo
