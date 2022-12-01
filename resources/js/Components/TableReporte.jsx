import React from 'react'

const TableReporte = ({solicitudes_D,usuarios}) => {
  return (
    <div>
      <table className="w-full text-sm text-left text-gray-500">
        <thead className="text-xs text-white uppercase bg-teal-600 ">
            <tr>
                <th colspan="2" className="py-3 px-6 text-center">
                  ID
                </th>
                
            </tr>
        </thead>
        <tbody>
            {
                solicitudes_D.map(solicitudes => {
                    return(
                    <tr className="bg-white border-b">
                        <th className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            {solicitudes.ID_Solicitud}
                        </th>
                        <td className="py-4 px-6">
                            
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

export default TableReporte