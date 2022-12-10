import React from 'react'

const Software = ({software}) => {
  
  
  return (
      
            <div className="relative max-w-xs bg-white rounded-lg border-2 border-neutral-100 shadow-md shadow-lime-800/50
                " style={{height:"184px",width:"160px"}}>
                <a 
                type='button'
                href="#">
                        <img src={`../images/softwares/${software.ID_Software}.png`} className='mt-3' style={{height:"148px",width:"180px"}} alt="" />            
                </a>
                <span className='absolute top-1 leading-4 font-bold bg-green-700 text-white rounded-2xl px-2 left-2' style={{fontSize:"11px"}}>{software.Nombre_Software}</span>
            </div>
  )
}

export default Software