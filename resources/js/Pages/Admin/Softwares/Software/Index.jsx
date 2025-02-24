import React, { useState } from 'react';
import Navbar from '@/Layouts/Navbar';
import { Head, Link } from '@inertiajs/inertia-react';
import Pagination from '@/Components/Pagination';
import List_Software from '@/Components/Software/List_Software';
import { Inertia } from '@inertiajs/inertia';
import { faPlusCircle} from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

export default function Index({soft,auth}) {
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
            <Head title='Software'/>
            <div className='flex flex-col my-3 '>
                <div className='flex items-center gap-8 '>
                <span className='text-slate-500 text-3xl'>Softwares</span>
                <div className='inline my-2'>
                    <Link
                        className="flex px-6 py-2 text-green-500 bg-transparent md:bg-green-500 md:text-white rounded-md focus:outline-none gap-1 md:gap-4 "
                        href={route("d.softwares.create")}
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
                        className='rounded-md py-1 text-slate-500 placeholder:text-gray-300 mt-2' 
                        type="text"
                        id='search'
                        onChange={(e) => setQuery(e.target.value)}
                        onKeyUp={search}
                        placeholder='Digitar Software'
                        />
                    </div>
                </div>
            </div>
            <div className="overflow-x-auto  relative shadow-md rounded-lg mt-5 flex">
                <table className="w-full text-xs md:text-sm text-left text-gray-500">
                    <thead className="text-xs text-white uppercase bg-green-700">
                        <tr className=''>
                            <th scope="col" className="py-3 px-2 md:px-5" style={{borderRight: '1px solid white'}}>
                                ID
                            </th>
                            <th scope="col" className="py-3 px-1 md:px-5" style={{borderRight: '1px solid white'}}>
                                <div className="flex items-center">
                                    Nombre de Software 
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" className="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                </div>
                            </th>
                            <th scope="col" className="py-3 px-3 md:px-5" style={{borderRight: '1px solid white'}}>
                                <div className="flex items-center">
                                    Imagen
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" className="ml-1 w-1 h-2" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                </div>
                            </th>
                            <th scope="col" className="py-3 px-3 md:px-5" style={{borderRight: '1px solid white'}}>
                                <div className="flex items-center">
                                    Descripción del Software
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" className="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                </div>
                            </th>
                            <th scope="col" className="py-3 px-1 md:px-5" style={{borderRight: '1px solid white'}}>
                                <div className="flex items-center">
                                    Uso del Software
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" className="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                </div>
                            </th>
                            <th scope="col" className="py-3 px-3 md:px-5">
                                <div className="flex justify-center items-center">
                                Accion
                                </div>
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        {
                            soft.data.map(sofft => {
                                return(
                                    <List_Software soft={sofft} key={sofft.ID_Software}/>
                                )
                            })
                        }
                       
                    </tbody>
                </table>
            </div>
            <Pagination class="mt-2" links={soft.links} />
        </Navbar>
    );
}