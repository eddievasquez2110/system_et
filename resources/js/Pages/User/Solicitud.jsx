import React, { useState } from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/inertia-react';
import Software from '@/Components/Software';
import PrimaryButton from '@/Components/PrimaryButton';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';
import Card_Software from '@/Components/Usuario/Card_Software';
import { Inertia } from '@inertiajs/inertia';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faMagnifyingGlass,faEye,faTrash} from '@fortawesome/free-solid-svg-icons';

const Solicitud = ({ auth, softwares, items, card, id}) => {
  const [query, setQuery] = useState('');
  
  const search = (e) => {
    Inertia.get(route('solicitud',id),
      { search: query },
      {
        preserveState: true,
        replace: true,
      })
  }
  
  const viewEspecificacion = () => {
      const maxuso = Math.max(...items.map(item => item.ID_Uso_Equipo));
      Inertia.get(route('viewEspecificacion',[id,maxuso])); 
  }

  const handleRemoveAll = () => {
    Inertia.delete(route('removeAll')); 
  }
 

  return (
   <AuthenticatedLayout auth={auth}>
    <Head title="Solicitud" />
     {/* <div className='mt-5 w-full h-20 backdrop-blur-sm bg-white/30 grid place-items-center'>SELECCIÓN DE PROGRAMAS</div> */}
    <div className="flex items-center justify-center mt-8 pb-5 ">
      <div className='flex items-center justify-center w-11/12'  >
        <div className='flex gap-8 w-full md:flex-row min-[200px]:flex-col '>
          {/* style={{width:"90%"}} */}
          <div className='flex md:w-1/3 min-[200px]:w-full md:h-screen min-[200px]:h-80' >
                    
            <div className='w-full overflow-auto bg-white rounded md:mt-20 min-[200px]:mt:4 p-0 ' >
            {/* style={{ height: "400px" }} */}
                <div className='bg-green-700 text-center text-white rounded-t-lg p-2'>
                   <span className='text-lg'><strong>Lista de Software seleccionados</strong></span>
                 </div>
                <div className='p-4'>
                 {    
                   items.map(item =>
                    <Card_Software key={item.id} item={item} />
                  ) 
                }
                <div className='flex justify-between gap-4'>
                {
                  (card.length !== 0) 
                   && 
                  <>
                    <button
                    onClick={viewEspecificacion}
                    className='bg-blue-500 mt-5 flex gap-2 items-center justify-center rounded text-white p-2 text-sm px-4 '
                    >
                      <FontAwesomeIcon 
                      icon={faEye}
                      />
                       Generar Especificación
                    </button>
                    </>
                }
                {
                  (card.length >=2)
                  &&
                  <>
                    <button
                    onClick={handleRemoveAll}
                    className='bg-red-500 mt-5 rounded flex gap-2 items-center justify-center text-white p-2 text-sm px-4'
                    >
                      <FontAwesomeIcon 
                      icon={faTrash}
                      />
                      Quitar Todo
                    </button>
                  </>
                }
                </div>
              </div>
            </div>
          </div>
          <div className='flex flex-col h-screen md:w-2/3 min-[200px]:w-full '>
            <div className='text-center p-4 bg-gradient-to-r from-slate-100 to-slate-200'>
                    
              <h2 className='text-green-700 font-bold'><strong>SELECCIÓN DE PROGRAMAS</strong></h2>
            </div>
            <div className='mt-3 ml-9 mr-9 flex items-center bg-green-500 rounded-md p-1'>
                      
              <input
                className='rounded-md p-2 px-3 w-full text-sm  placeholder:text-slate-400 border-none '
                type="text"
                id='search'
                onChange={(e) => setQuery(e.target.value)}
                onKeyUp={search}
                placeholder='Digitar Software'
              />
              <label className='text-white flex items-center pl-1 pr-1 justify-center p-0'><FontAwesomeIcon icon={faMagnifyingGlass} /></label>
            </div>

            <div className='mt-8 overflow-auto flex flex-wrap justify-center gap-5'>
               {
                softwares.map(software =>
                  <Software key={software.ID_Software} software={software} />
                )
               }
             </div>
           </div>
                  
         </div>
       </div>
    </div>
   </AuthenticatedLayout>
  )
}

export default Solicitud