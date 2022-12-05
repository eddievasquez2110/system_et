import React from 'react'
const Equipo = ({equipo,auth}) => {

  return (
      <div className="max-w-xs bg-white rounded-lg border-2 border-green-100 shadow-md shadow-lime-800/50 ">
                <a href="#">
                    <img src={`../images/equipos/${equipo.Imagen}`} className='rounded-t-lg' style={{height:"250px",width:"380px"}} alt="" />
                </a>
                <div className="p-5 ">
                { equipo.ID_Tipo_Equipo == '1' || equipo.ID_Tipo_Equipo == '2' ?
                    <>
                    <a href="#">
                        <h5 className="mb-2 text-2xl font-bold tracking-tight text-lime-800 text-center">{equipo.Nombre_Tipo_Equipo.toUpperCase()}</h5>
                    </a>
                    
                    <a href={route('solicitud')}  className="inline-flex items-center justify-center py-5 w-full bg-green-700 border border-transparent rounded-md font-bold text-xs text-white tracking-widest active:bg-green-900 hover:bg-green-600 transition ease-in-out duration-150">
                        Ir
                        <svg aria-hidden="true" className="ml-2 -mr-1 w-4 h-4 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"></path></svg>
                    </a>
                    </>
                    : <>
                    <a href="#">
                        <h5 className="mb-2 text-2xl font-bold tracking-tight text-lime-800 text-center">{equipo.Nombre_Tipo_Equipo.toUpperCase()}</h5>
                    </a>
                    <a href={route('inicio.show',{id: `${equipo.ID_Tipo_Equipo}`})}  className="inline-flex items-center justify-center py-5 w-full bg-green-700 border border-transparent rounded-md font-bold text-xs text-white tracking-widest active:bg-green-900 hover:bg-green-600 transition ease-in-out duration-150">
                        Ir
                        <svg aria-hidden="true" className="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"></path></svg>
                    </a>

                    </>
                } 

                    
                </div>
            </div>
  )
}

export default Equipo