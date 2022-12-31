import React from 'react'

const Table = ({equipos,especificacion}) => {
  return (
    <div>
    
      <table className="w-full text-sm text-left text-gray-500">
        <thead className="text-xs text-white uppercase bg-teal-600 ">
            <tr>
                <th colSpan="2" className="py-3 px-6 text-center">
                  {equipos.Nombre_Tipo_Equipo}
                </th>
            </tr>
        </thead>
        <tbody>
            {
                especificacion.map(especifi => {
                    return(
                        <tr key={especifi.ID_Especificacion_Equipo} className="bg-white border-b">
                            <th className="py-4 px-6 font-medium text-gray-900">
                                {especifi.Nombre_Especificacion_Equipo}
                            </th>
                            <td className="py-4 px-6">
                                {especifi.Especificacion_Equipo}
                            </td>
                        </tr>
                    )
                })
            }
        </tbody>
    </table>
    </div>
  )
}

export default Table
