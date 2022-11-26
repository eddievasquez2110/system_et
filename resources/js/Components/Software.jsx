import React from 'react'
import CheckboxSoftware from './CheckboxSoftware'
import PrimaryButton from './PrimaryButton'
const Software = ({software}) => {
   

  return (

        <div className="max-w-xs bg-white rounded-lg border-2 border-neutral-100 shadow-md  ">
                
            <div className="p-5">
                    
                <CheckboxSoftware name="software" value={software.Nombre_Software} />
                    <span className="ml-2 text-md text-lime-800  ">{software.Nombre_Software}</span>
            </div>
            
        </div>
  )
}

export default Software