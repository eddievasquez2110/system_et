import React from 'react'
import CheckboxSoftware from './CheckboxSoftware'

const Software = ({software}) => {
    
  return (
        <div className="max-w-xs bg-white rounded-lg border-2 border-neutral-100 shadow-md shadow-lime-800/50">
            <a href="#">
                    <img src={`../images/software/${software.ID_Software}.png`} className='rounded-t-lg' style={{height:"150px",width:"200px"}} alt="" />
            </a> 
            <div className="p-5">
                <a href='#' name='software'>   
                    <CheckboxSoftware name="software" value={software.Nombre_Software} />
                        <span className="ml-2 text-md text-lime-800">{software.Nombre_Software.toUpperCase()}</span>
                </a> 
            </div>
            
        </div>
  )
}

export default Software