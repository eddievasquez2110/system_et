import React, { useState } from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/inertia-react';
import Software from '@/Components/Software';
import PrimaryButton from '@/Components/PrimaryButton';
import NavbarSAdmin from '@/Layouts/NavBarSAdmi';
import Card_Software from '@/Components/Usuario/Card_Software';
import { Inertia } from '@inertiajs/inertia';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faArrowDown, faArrowDownZA, faArrowUp, faArrowUpAZ } from '@fortawesome/free-solid-svg-icons';

const Solicitud = ({ auth, softwares, items, card, id }) => {
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
  
  return (
    <>
      {auth.user.ID_Rol == 1 ?
        <NavbarSAdmin auth={auth}>
          <Head title="Solicitud" />
          <div className='mt-5 w-full h-20 backdrop-blur-sm bg-white/30 grid place-items-center'>SELECCIÓN DE PROGRAMAS</div>
          <div className='flex'>
            <div style={{ width: "70%" }}>
              {
                softwares.map(software =>
                  <Software key={software.ID_Software} software={software} />
                )
              }
            </div>
            <div style={{ width: "30%" }}>
              s
            </div>
          </div>
          <div className='p-10 flex justify-center'>
            <PrimaryButton>Continuar</PrimaryButton>
          </div>
        </NavbarSAdmin>
        : auth.user.ID_Rol == 3 ?
          <AuthenticatedLayout auth={auth}>
            <Head title="Solicitud" />
            {/* <div className='mt-5 w-full h-20 backdrop-blur-sm bg-white/30 grid place-items-center'>SELECCIÓN DE PROGRAMAS</div> */}
            <div className="flex items-center justify-center mt-8 pb-5 ">
              <div className='flex items-center justify-center w-11/12'  >
                <div className='flex gap-8 w-full md:flex-row min-[200px]:flex-col '>
                  {/* style={{width:"90%"}} */}
                  <div className='flex md:w-1/3 min-[200px]:w-full md:h-screen min-[200px]:h-80' >
                    
                    <div className='w-full overflow-auto bg-white rounded md:mt-20 min-[200px]:mt:4 p-6 ' >
                    {/* style={{ height: "400px" }} */}
                      <div className=''>
                        <div className='bg-green-300 p-3 text-center'>
                          <span className='text-lg'>Lista</span>
                        </div>
                        {    
                          items.map(item =>
                            <Card_Software key={item.id} item={item} />
                          ) 
                        }
                        {
                          (card.length !== 0) 
                          && 
                          <button
                          onClick={viewEspecificacion}
                            className='bg-blue-500 mt-5 rounded text-white p-2 text-sm '
                          >Ver Especificación</button>
                        }
                      </div>
                    </div>
                  </div>
                  <div className='flex flex-col h-screen md:w-2/3 min-[200px]:w-full '>
                    <div className='text-center p-4'>
                      <h2 className='text-green-700 font-bold'>SELECCIÓN DE PROGRAMAS</h2>
                    </div>
                    <div className='mt-3 flex items-center gap-4'>
                      <label className='text-slate-500'>Buscar: </label>
                      <input
                        className='rounded-md py-1 w-full text-slate-500 placeholder:text-gray-300'
                        type="text"
                        id='search'
                        onChange={(e) => setQuery(e.target.value)}
                        onKeyUp={search}
                        placeholder='Digitar Software'
                      />
                      <div className='inline-flex gap-4'>
                        {/* <Link className='hover:bg-green-300 p-2' href={route('ordenarAsc')}>
                          <FontAwesomeIcon className="h-5 w-6" icon={faArrowUpAZ} />
                        </Link>

                        <Link className='hover:bg-green-300 p-2' href={route('ordenarDesc')}>
                          <FontAwesomeIcon className="h-5 w-6" icon={faArrowDownZA} />
                        </Link> */}
                      </div>
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
          : <></>
      }
    </>

  )
}

export default Solicitud