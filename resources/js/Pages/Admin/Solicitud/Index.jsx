import React, { useState } from 'react';
import Navbar from '@/Layouts/Navbar';
import { Head, Link } from '@inertiajs/inertia-react';
import Pagination from '@/Components/Pagination';
import List_Solicitud from '@/Components/Solicitud/List_Solicitud';
import { Inertia } from '@inertiajs/inertia';
import Dropdown from '@/Components/Dropdown';

export default function Index({solis,auth,solis1}) {
    const [query,setQuery]= useState('');

    const search = (e) => {
        Inertia.get(route(route().current()),
            {search : query},
            {
                preserveState: true,
                replace: true,
            })     
    }

    return (
        <Navbar auth={auth}>
            <Head title='Admin'/>
            <div className='flex flex-col my-3'>
                <div className='flex items-center gap-8 '>
                <span className='text-slate-500 text-3xl'>Solicitudes</span>
                <div className='inline my-2'>
                </div>
                </div>
                <div className='flex mt-2  items-center justify-between'>
                    <div className='hidden md:block flex items-center text-slate-500'>
                        Registros
                    </div>    
                    
                    <div className='items-center gap-4 md:w-auto md:flex'>
                        <div className='flex gap-4'>
                            <Dropdown>
                            <Dropdown.Trigger>
                                <span className="inline-flex rounded-md">
                                    <button
                                        type="button"
                                        className="font-bold inline-flex px-2 py-2 border border-green-400 text-sm leading-4 font-medium rounded-md text-green-600 hover:bg-green-300 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                    >Seleccionar filtro
                                    
                                    </button>
                                </span>
                            </Dropdown.Trigger>
                            <Dropdown.Content>
                                <Link href={route('d.solicituds.pendiente')} as="button" className='block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-red-200 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'>
                                    Ordenar pendientes
                                </Link>
                                <Link href={route('d.solicituds.aceptado')} as="button" className='block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-red-200 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'>
                                    Ordenar aceptados
                                </Link>
                                <Link href={route('d.solicituds.rechazado')} as="button" className='block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-red-200 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'>
                                    Ordenar rechazados
                                </Link>
                
                            </Dropdown.Content>
                        </Dropdown>
                        <Link className='font-bold inline-flex px-2 py-2 border border-red-300 text-sm leading-4 font-medium rounded-md text-red-400 hover:bg-red-300 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150' 
                        href={route('d.solicituds')}>Borrar Filtro</Link>
                        </div>
                        <div className='md:flex gap-3 items-center'>
                            <label className='hidden md:block text-slate-500'>Buscar: </label>
                            <input 
                            className='flex mt-2 rounded-md py-1 text-slate-500 placeholder:text-gray-300 ' 
                            type="text"
                            id='search'
                            onChange={(e) => setQuery(e.target.value)}
                            onKeyUp={search}
                            placeholder='Digitar Correo de usuario'
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div className="overflow-x-auto relative shadow-md rounded-lg mt-5">
                <table className="w-full text-xs md:text-sm text-left text-gray-500 ">
                    <thead className="text-xs text-white uppercase bg-green-700">
                        <tr>
                            <th scope="col" className="py-3 px-3 md:px-4" style={{borderRight: '1px solid white'}}>
                                    ID
                            </th>
                            <th scope="col" className="py-3 px-3 md:px-4 " style={{borderRight: '1px solid white'}}>
                                    Nombre
                            </th>
                            <th scope="col" className="py-3 px-3 md:px-4 " style={{borderRight: '1px solid white'}}>
                                    Correo
                            </th>
                            <th scope="col" className="py-3 px-3 md:px-4 " style={{borderRight: '1px solid white'}}>
                                    Proyecto
                            </th>
                            <th scope="col" className="py-3 px-1 md:px-4" style={{borderRight: '1px solid white'}}>
                                <div className="flex items-center">
                                    Fecha
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" className="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                </div>
                              
                            </th>
                            <th scope="col" className="py-3 px-3 md:px-4" style={{borderRight: '1px solid white'}}>
                                Estado
                            </th>
                            <th scope="col" className="py-3 px-3 md:px-4">
                                <div className="flex justify-center items-center">
                                Accion
                                </div>
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        {
                            solis.data.map(soli => {
                                return( 
                                    <List_Solicitud soli={soli} key={soli.ID_Solicitud}/>
                                )
                            })
                        }
                          
                    </tbody>
                </table>
            </div>
            
            <Pagination className="mt-2" links={solis.links} />
        </Navbar>
    );
}