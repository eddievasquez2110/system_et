import React from 'react'


const Proyecto = ({solis}) => {

  return (
     <div>
      {
        solis.map(solic => {
            return(
              <embed src={`/images/proyectos/${solic.Proyecto}`} 
              style={{width:'100%', height:'500px'}} ></embed>
            )
        })
      }

    </div>  
  )
}
  
export default Proyecto