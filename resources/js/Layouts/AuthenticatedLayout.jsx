import React, { useState } from 'react';
import ApplicationLogo from '@/Components/ApplicationLogo';
import Dropdown from '@/Components/Dropdown';
import NavLink from '@/Components/NavLink';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { Link } from '@inertiajs/inertia-react';
import ButtonDashboard from '@/Components/ButtonDashboard';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import Swal from 'sweetalert2';
import { Inertia } from '@inertiajs/inertia';

import { faUser,faUsers,faClipboardList,faComputer, faBook, faWindowRestore, faBriefcase} from '@fortawesome/free-solid-svg-icons';

export default function Authenticated({ auth, children }) {
    const [showingNavigationDropdown, setShowingNavigationDropdown] = useState(false);
    
    const alertLogout = (e) => {
        
       console.log(e);
        Swal.fire({
            title: '¿Estas seguro?',
            text: "Usted saldra del sistema",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Salir'
          }).then((result) => { 
            if (result.isConfirmed) {
              Swal.fire(
                'Logout!',
                'Saliste del sistema.',
                'success'
              )
              Inertia.post(route('logout'));
            }
          })
    }

    return (
        <div className="min-h-screen bg-gray-100">
            <nav className="bg-green-800 border-b border-gray-100">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex justify-between p-2">
                        <div className="flex">

                            {/* Logo UNCP */}
                            <div className="shrink-0 flex items-center">
                                <Link href="/">
                                    <ApplicationLogo className="block h-5 w-auto text-gray-500" />
                                </Link>
                                <h1 className='text-yellow-400 ml-4 font-mono'>UNCP EETT</h1>
                            </div>
                            { auth.user.ID_Rol == '1' ?
                                <div className="hidden space-x-8 sm:-my-px sm:ml-20 sm:flex ">
                                    
                                
                                </div>
                                : auth.user.ID_Rol == '2' ?
                                    <div className="hidden space-x-8 sm:-my-px sm:ml-20 sm:flex ">

                                    </div>
                                : auth.user.ID_Rol == '3' ?
                                    <div className="hidden space-x-8 sm:-my-px sm:ml-20 sm:flex ">
                                        <NavLink href={route('user')} active={route().current('user')}>
                                            Inicio
                                        </NavLink>
                                        
                                        <NavLink href={route('infosoft')} active={route().current('infosoft')}>
                                            Software
                                        </NavLink>
                                    
                                    </div>
                                : <></>
                            } 
                            
                        </div>
                        <div className='flex'>
                        <div className="sm:flex sm:items-center m-2">
                            <div className="inline-flex px-2 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white font-bold hover:text-green-300 focus:outline-none transition ease-in-out duration-150 ">
                                                <FontAwesomeIcon className="h-6 w-10"  icon={faBriefcase} />
                                                
                        </div>
                        </div>
                        <div className="hidden sm:flex sm:items-center sm:ml-6 h-12 w-38 justify-center flex m-2 border border-gray-500 rounded-lg bg-white">
                            <div className="ml-3 relative ">
                                <Dropdown>
                                    <Dropdown.Trigger>
                                        <span className="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                className="inline-flex px-2 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-green-600 font-bold hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                            >
                                                <FontAwesomeIcon className="h-5 w-10"  icon={faUser} />{auth.user.name.toUpperCase()}

                                                <svg
                                                    className="ml-2 -mr-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fillRule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clipRule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </Dropdown.Trigger>
                                    <Dropdown.Content>
                                        <Link onClick={alertLogout} as="button" className='block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-red-200 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'>
                                            Cerrar Sesión
                                        </Link>
                                    </Dropdown.Content>
                                </Dropdown>
                            </div>
                        </div>                        
                        </div>
                        <div className="-mr-2 flex items-center sm:hidden">
                            <button
                                onClick={() => setShowingNavigationDropdown((previousState) => !previousState)}
                                className="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                            >
                                <svg className="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        className={!showingNavigationDropdown ? 'inline-flex' : 'hidden'}
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        strokeWidth="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        className={showingNavigationDropdown ? 'inline-flex' : 'hidden'}
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        strokeWidth="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div className={(showingNavigationDropdown ? 'block' : 'hidden') + ' sm:hidden'}>
                    { auth.user.ID_Rol == '1' ?
                        <div className="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink href={route('user')} active={route().current('user')}>
                                Inicio
                            </ResponsiveNavLink>
                            <ResponsiveNavLink href={route('infosoft')} active={route().current('infosoft')} >
                                Software
                            </ResponsiveNavLink>
                        </div>
                        : auth.user.ID_Rol == '2' ?
                        <div className="pt-2 pb-3 space-y-1">
                            
                        </div>
                        : auth.user.ID_Rol == '3' ?
                        <div className="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink href={route('user')} active={route().current('user')}>
                                Inicio
                            </ResponsiveNavLink>
                            <ResponsiveNavLink href={route('user')} >
                                Equipos
                            </ResponsiveNavLink>
                            <ResponsiveNavLink href={route('user')} >
                                Software
                            </ResponsiveNavLink>
                        </div>
                        : <></>
                    }
                    

                    <div className="pt-4 pb-1 border-t border-gray-200">
                        <div className="px-4">
                            <div className="font-medium text-base text-green-200">{auth.user.name}</div>
                            <div className="font-medium text-sm text-green-300">{auth.user.email}</div>
                        </div>

                        <div className="mt-3 space-y-1">
                            <Link onClick={alertLogout} as="button" className=' text-white block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-red-200 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'>
                                
                                Cerrar Sesión
                                
                            </Link>
                        </div>
                    </div>
                </div>
            </nav>
            
            {
                auth.user.ID_Rol == '1'?
                <div className='flex h-full '>
                    <div className='flex flex-col w-3/5  basis-1/4 bg-green-400 pt-10'>
                        <Link href={route('reportes.a')} className='grid'>
                            <ButtonDashboard className='flex'><FontAwesomeIcon className="h-5 w-10"  icon={faUsers} />
                                <span className='hidden sm:flex '>Gestión de Usuarios</span>
                            </ButtonDashboard>
                        </Link>
                        <Link href={route('reportes.a')} className='grid'>
                            <ButtonDashboard className='flex'><FontAwesomeIcon className="h-5 w-10"  icon={faClipboardList} />
                                <span className='hidden sm:flex '>Gestión de Solicitudes</span>
                            </ButtonDashboard>
                        </Link>
                        <Link href={route('reportes.a')} className='grid'>
                            <ButtonDashboard className='flex'><FontAwesomeIcon className="h-5 w-10"  icon={faWindowRestore} />
                                <span className='hidden sm:flex '>Gestión de Software</span>
                            </ButtonDashboard>
                        </Link>
                        <Link href={route('reportes.a')} className='grid'>
                            <ButtonDashboard className='flex'><FontAwesomeIcon className="h-5 w-10"  icon={faComputer} />
                                <span className='hidden sm:flex flex-inline'>Gestión de Equipos</span>
                            </ButtonDashboard>
                        </Link>
                        <Link href={route('reportes.a')} className='grid'>
                            <ButtonDashboard className='flex'><FontAwesomeIcon className="h-5 w-10"  icon={faBook} />
                                <span className='hidden sm:flex '>Gestión de Reportes</span>
                            </ButtonDashboard>
                        </Link>
                    </div>
                    <div className='w-full h-full place-content-around '>
                        <div className='bg-gradient-to-r from-green-100 to-green-300'>
                            {children} 
                        </div>
                    </div>
                </div> : auth.user.ID_Rol == '2'?
                <div className='flex h-full'>
                    <div className='flex flex-col w-3/5  basis-1/4 bg-green-400 pt-10'>
                        <Link href={route('reportes')} className='grid'>
                            <ButtonDashboard className='flex'><FontAwesomeIcon className="h-5 w-10"  icon={faUsers} />
                                <span className='hidden sm:flex '>Gestión de Usuarios</span>
                            </ButtonDashboard>
                        </Link>
                        <Link href={route('reportes')} className='grid'>
                            <ButtonDashboard className='flex'><FontAwesomeIcon className="h-5 w-10"  icon={faClipboardList} />
                                <span className='hidden sm:flex '>Gestión de Solicitudes</span>
                            </ButtonDashboard>
                        </Link>
                        <Link href={route('reportes')} className='grid'>
                            <ButtonDashboard className='flex'><FontAwesomeIcon className="h-5 w-10"  icon={faWindowRestore} />
                                <span className='hidden sm:flex '>Gestión de Software</span>
                            </ButtonDashboard>
                        </Link>
                        <Link href={route('reportes')} className='grid'>
                            <ButtonDashboard className='flex'><FontAwesomeIcon className="h-5 w-10"  icon={faComputer} />
                                <span className='hidden sm:flex flex-inline'>Gestión de Equipos</span>
                            </ButtonDashboard>
                        </Link>
                        <Link href={route('reportes')} className='grid'>
                            <ButtonDashboard className='flex'><FontAwesomeIcon className="h-5 w-10"  icon={faBook} />
                                <span className='hidden sm:flex '>Gestión de Reportes</span>
                            </ButtonDashboard>
                        </Link>
                    </div>
                    <div className='w-full h-full place-content-around '>
                        <div className='bg-gradient-to-r from-green-100 to-green-300'>
                            {children} 
                        </div>
                    </div>
                </div> : auth.user.ID_Rol == '3' ?
                    <div className='flex w-full h-full place-content-around '>
                    
                        <div className='bg-gradient-to-r w-full h-full from-green-100 to-green-300'>
                            {children} 
                        </div>
                    </div>
                 : <></>
            }
                <div className='h-14 flex items-center justify-center text-slate-400 border-t-2 border-neutral-100 bg-green-100'>
                   <div>
                    Copyrigth © OGSIC 2022 
                    
                   </div>
                </div>
            <main>
            
            </main>
            
        </div>
    );
}