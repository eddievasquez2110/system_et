import React, { useState } from 'react';
import Navbar from '@/Layouts/Navbar';
import { Head, Link } from '@inertiajs/inertia-react';
import Pagination from '@/Components/Pagination';
import { Inertia } from '@inertiajs/inertia';
import List_Oficina from '@/Components/Usuario/List_Oficina';
import { faPlusCircle} from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

export default function Index({ofis,auth}) {
    const [query,setQuery]= useState('');
    const search = (e) => {
        Inertia.get(route(route().current()),
            {search : query},
            {
                preserveState: true,
                replace: true,
            })     
    }
    
    console.log(query);

    return (
        <Navbar auth={auth}>
            <Head title='Oficinas'/>
            <div className='flex flex-col my-3'>
                <div className='flex items-center gap-8 '>
                    <span className='text-slate-500 text-3xl'>Oficinas</span>
                    <div className='inline my-2'>
                    <Link
                        className="flex px-6 py-2 text-green-500 bg-transparent md:bg-green-500 md:text-white rounded-md focus:outline-none gap-4 "
                        href={route("d.oficinas.create")}
                        ><FontAwesomeIcon class={'h-5 w-5'} icon={faPlusCircle}></FontAwesomeIcon> 
                            <label className='hidden md:block'>Nuevo</label>
                    </Link>
                    </div>
                </div>
                <div className='flex mt-2  items-center justify-between'>
                    <div className='flex items-center text-slate-500 hidden md:block'>
                        Registros
                    </div>
                    <div className='flex items-center gap-4'>
                        <label className='text-slate-500 hidden md:block'>Buscar: </label>
                        <input 
                        className='rounded-md py-1 text-slate-500 placeholder:text-gray-300 mt-2 ' 
                        type="text"
                        id='search'
                        onChange={(e) => setQuery(e.target.value)}
                        onKeyUp={search}
                        placeholder='Digitar Oficina'
                        />
                    </div>
                </div>
            </div>
            <div className="overflow-x-auto  relative shadow-md rounded-lg mt-5">
                <table className="w-full text-sm text-left text-gray-500 ">
                    <thead className="text-xs text-white uppercase bg-green-700">
                        <tr>
                            <th scope="col" className="py-3 px-3 md:px-6" style={{borderRight: '1px solid white'}}>
                                ID
                            </th>
                            <th scope="col" className="py-3 px-2 md:px-6" style={{borderRight: '1px solid white'}}>
                                Nombre de Oficina
                            </th>
                            <th scope="col" className="py-3 px-1 md:px-6" style={{borderRight: '1px solid white'}}>
                                Cargo
                            </th>
                            <th scope="col" className="py-3 px-1 md:px-2">
                                <div className="flex justify-center items-center">
                                Accion
                                </div>
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        {console.log(ofis)}
                        {
                            ofis.data.map(ofiss => {
                                return(
                                    <List_Oficina ofis={ofiss} key={ofiss.ID_Oficina}/>
                                )
                            })
                        }
                        
                    </tbody>
                </table>
            </div>
            <Pagination class="mt-2" links={ofis.links} />
        </Navbar>
    );
}