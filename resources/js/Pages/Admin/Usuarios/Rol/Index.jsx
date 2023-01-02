import React, { useState } from 'react';
import Navbar from '@/Layouts/Navbar';
import { Head, Link } from '@inertiajs/inertia-react';
import Pagination from '@/Components/Pagination';
import { Inertia } from '@inertiajs/inertia';
import List_Rol from '@/Components/Usuario/List_Rol';
import { faPlusCircle} from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

export default function Index({roles,auth}) {
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
            <Head title='Roles'/>
            <div className='flex flex-col my-3'>
                <div className='flex items-center gap-8 '>
                    <span className='text-slate-500 text-3xl'>Roles</span>
                    <div className='inline my-2'>
                    <Link
                        className="flex px-6 py-2 text-green-500 bg-transparent md:bg-green-500 md:text-white rounded-md focus:outline-none gap-4 "
                        href={route("d.roles.create")}
                        ><FontAwesomeIcon class={'h-5 w-5'} icon={faPlusCircle}></FontAwesomeIcon> 
                            <label className='hidden md:block'>Nuevo</label>
                    </Link>
                    </div>
                </div>
                <div className='flex mt-2  items-center justify-between'>
                    <div className='hidden md:block flex items-center text-slate-500'>
                        Registros
                    </div>
                    <div className='flex items-center gap-4'>
                        <label className='hidden md:block text-slate-500'>Buscar: </label>
                        <input 
                        className='mt-2 rounded-md py-1 text-slate-500 placeholder:text-gray-300' 
                        type="text"
                        id='search'
                        onChange={(e) => setQuery(e.target.value)}
                        onKeyUp={search}
                        placeholder='Digitar Rol'
                        />
                    </div>
                </div>
            </div>
            <div className="overflow-x-auto  relative shadow-md rounded-lg mt-5">
                <table className="w-full text-xs md:text-sm text-left text-gray-500 ">
                    <thead className="text-xs text-white uppercase bg-green-700">
                        <tr>
                            <th scope="col" className="py-3 px-4 md:px-6" style={{borderRight: '1px solid white'}}>
                                ID
                            </th>
                            <th scope="col" className="py-3 px-4 md:px-6" style={{borderRight: '1px solid white'}}>
                                Nombre de Rol
                            </th>
                            
                            <th scope="col" className="py-3 px-2">
                                <div className="flex justify-center items-center">
                                Accion
                                </div>
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        {console.log(roles)}
                        {
                            roles.data.map(rol => {
                                return(
                                    <List_Rol roles={rol} key={rol.ID_Rol}/>
                                )
                            })
                        }
                        
                    </tbody>
                </table>
            </div>
            <Pagination class="mt-2" links={roles.links} />
        </Navbar>
    );
}