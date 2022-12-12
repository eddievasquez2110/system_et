import React from 'react'
import { useState } from 'react'
//mport { FaAngleRight} from "react-icons/fa";
import { Link } from '@inertiajs/inertia-react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faCircleLeft, faUser} from '@fortawesome/free-solid-svg-icons';
import Dropdown from '@/Components/Dropdown';
import { Inertia } from '@inertiajs/inertia';

import Swal from 'sweetalert2';
import NavLink from '@/Components/NavLink';

const NavbarSAdmin = ({auth,children}) => {
    const [show,setShow] = useState(false);
    const [show1,setShow1] = useState(false);
    const [show2,setShow2] = useState(false);
    const [open,setOpen] =useState(true);

    useEffect(()=> {
        const data = window.localStorage.getItem('valueOpen');
        setOpen(JSON.parse(data));
    },[])
    
    useEffect(() => {
        window.localStorage.setItem('valueOpen',JSON.stringify(open))
    },[open])

    const styleOpen = {
        display:"block"
    }
    const styleClose = {
        display:"none"
    }
    const alertLogout = (e) => {
       console.log(e);
        Swal.fire({
            title: 'Estas seguro?',
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
    <>
                         
    <div className='flex justify-between'>
        
        <div className="shadow-md bg-green-800 sticky top-0 h-screen" style={open ?{width:'18%'}:{width:'75px'}}>
          <div className='relative '>
            <div className="pt-4 pb-2 px-6">
                <a href="#">
                <div className="flex cursor-auto items-center pb-4 border-b border-gray-200">
                    <div className="shrink-0">
                    <img src={"/images/Logo/Logo.png"} style={open ?{width:'75px'}:{width:'35px'}} alt="" />
                    </div>
                    <div className="grow ml-3 " style={open ? styleOpen : styleClose}>
                    <p className="text-sm font-semibold text-white">Sistema de <br />Especificaciones</p>
                    </div>
                </div>
                </a>
            </div>
            </div>
            <div onClick={() => setOpen(!open ) || setOpen1(!open1)} className='absolute w-8 h-8 text-lg text-white cursor-pointer inset-y-1/2 -right-3 flex items-center justify-center rounded-full bg-teal-500'>
                {/* <FaAngleRight/> */}
                <FontAwesomeIcon className="h-5 w-10 "  icon={faCircleLeft} /> 
            </div>

            <div className="overflow-y-auto py-4">
                <ul className="space-y-2">
                    <li className='px-3'>
                        <Link href={route('admin')} active={route().current('admin')} className="flex items-center justify-center p-2 text-base font-normal text-white rounded-lg focus:outline-none hover:text-green-700 hover:bg-green-50 focus:bg-green-50 focus:text-green-600 transition duration-300 ease-in-out">
                            <svg aria-hidden="true" className="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                            <span style={open ? styleOpen : styleClose} className="flex-1 ml-3 whitespace-nowrap">Dashboard</span>
                        </Link>
                    </li>
                    <li className='px-3 '>
                        <button href="#" onClick={()=>setShow2(!show2)} className="flex  items-center justify-center w-full p-2 text-base font-normal text-white rounded-lg  hover:text-green-700 hover:bg-green-50 focus:bg-green-50 focus:text-green-600 transition duration-300 ease-in-out">
                        <svg data-tooltip-target="tooltip-right" data-tooltip-placement="right" type="button"  aria-hidden="true" className="flex-shrink-0 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path  d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path></svg>
                            <span style={open ? styleOpen : styleClose}  className="flex-1 ml-3 text-left whitespace-nowrap">Gestión de Usuarios</span>
                            {open && <svg  className="w-6 h-6" style={show2?{transform: 'rotate(180deg)',}:{transform: 'rotate(0deg)'}} fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"></path></svg>}
                        </button>
                        { open ?(show2 && <ul  className="bg-white rounded-lg mt-1 ">
                        <li>
                                <Link href={route('d.softwares.index')}  className="flex items-center p-2 pl-8 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Roles
                                </Link>
                            </li>
                            <li>
                                <Link href={route('d.softwares.index')}  className="flex items-center p-2 pl-8 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Oficinas
                                </Link>
                            </li>
                            <li>
                                <Link href={route('d.usuarios.index')}  className="flex items-center p-2 pl-8 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Usuarios
                                </Link>
                            </li>
                            
                        </ul>) : (show2 && <ul  className="absolute z-20 mt-1 bg-white rounded-lg">
                        <li>
                                <Link href={route('d.softwares.index')}  className="flex items-center p-2 px-5 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Roles
                                </Link>
                            </li>
                            <li>
                                <Link href={route('d.softwares.index')}  className="flex items-center p-2 px-5 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Oficinas
                                </Link>
                            </li>
                            <li>
                                <Link href={route('d.usuarios.index')}  className="flex items-center p-2 px-5 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Usuarios
                                </Link>
                            </li>
                            
                        </ul>)}
                    </li>
                    <li className='px-3'>
                        <button href="#" onClick={()=>setShow(!show)} className="flex items-center justify-center w-full p-2 text-base font-normal text-white rounded-lg  hover:text-green-700 hover:bg-green-50 focus:bg-green-50 focus:text-green-600 transition duration-300 ease-in-out">
                        <svg aria-hidden="true" className="flex-shrink-0 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        <span style={open ? styleOpen : styleClose}  className="flex-1 ml-3 text-left whitespace-nowrap">Equipos</span>
                        {open && <svg  className="w-6 h-6" style={show?{transform: 'rotate(180deg)',}:{transform: 'rotate(0deg)'}} fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"></path></svg>}
                        </button>
                        <ul style={show?{display:"block"}:{display:"none"}} className="bg-white rounded-lg mt-1">
                            <li>
                                <Link href={route('s.tipoequipos.index')} active={route().current('s.tipoequipos.index')} className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Tipo de Equipo
                                </Link>
                            </li>
                            <li>
                            <Link href={route('s.usoequipos.index')} active={route().current('s.usoequipos.index')} className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                Uso de Equipo
                            </Link>
                            </li>
                            <li>
                            <Link href={route('s.especificacionequipo.index')} active={route().current('s.especificacionequipo.index')} className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                Especificacion Equipo
                            </Link>
                            </li>
                        </ul>
                    </li>
                    <li className='px-3'>
                        <button href="#" onClick={()=>setShow1(!show1)} className="flex items-center justify-center w-full p-2 text-base font-normal text-white rounded-lg  hover:text-green-700 hover:bg-green-50 focus:bg-green-50 focus:text-green-600 transition duration-300 ease-in-out">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"  stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                        <span style={open1 ? styleOpen : styleClose}  className="flex-1 ml-3 text-left whitespace-nowrap">Software</span>
                        {open1 && <svg  className="w-6 h-6" style={show1?{transform: 'rotate(180deg)',}:{transform: 'rotate(0deg)'}} fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"></path></svg>}
                        </button>
                        <ul style={show1?{display:"block"}:{display:"none"}} className="bg-white rounded-lg mt-1">
                            <li>
                                <Link href={route('s.softwares')} active={route().current('s.softwares.index')} className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Software
                                </Link>
                            </li>
                            <li>
                                <Link href={route('s.especificacionsoftware')} active={route().current('s.especificacionsoftware.index')} className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-green-800 hover:bg-green-100 transition duration-300 ease-in-out">
                                    Especificacion de Software
                                </Link>
                            </li>
                            
                        </ul>
                    </li>

                    <li className='px-3'>
                        <Link href={route('s.reportes')} active={route().current('s.reportes')} className="flex items-center justify-center p-2 text-base font-normal text-white rounded-lg focus:outline-none hover:text-green-700 hover:bg-green-50 focus:bg-green-50 focus:text-green-600 transition duration-300 ease-in-out">
                            <svg aria-hidden="true" className="flex-shrink-0 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path  d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path></svg>
                            <span style={open ? styleOpen : styleClose} className="flex-1 ml-3 whitespace-nowrap ">Reportes</span>
                        </Link>
                    </li>
                    
                    <li className='bottom-0  px-3 py-3  absolute  w-full' >
                        <Link onClick={alertLogout} as="button"  className="flex items-center w-full text-left justify-center p-2 text-base font-normal text-white rounded-lg  hover:text-green-700 hover:bg-green-50 focus:bg-green-50 focus:text-green-600 transition duration-300 ease-in-out">
                        <svg aria-hidden="true" className="flex-shrink-0 w-6 h-6 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path  d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"></path></svg>
                        <span style={open ? styleOpen : styleClose} className="flex-1 ml-3  whitespace-nowrap">Salir</span>
                        </Link>
                    </li>
                    </ul>
            </div>
        </div>
        <div className='bg-white' style={open ?{width:'82%'}:{width:'95%'}}>
            {auth.user.ID_Rol == 1 ?

                
            <div className='justify-center'>
                <nav className="bg-green-800 h-14 ">
                    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mr-10 pt-3">
                        <div className="hidden space-x-8 sm:-my-px sm:ml-20 sm:flex">
                            <NavLink href={route('superadmin')} active={route().current('superadmin')}>
                                Inicio
                            </NavLink>
                            <NavLink href={route('user')} >
                                Equipos
                            </NavLink>
                            <NavLink href={route('infosoft')}>
                                Software
                            </NavLink>
                        </div>
                    </div>
                </nav>
            </div>
                : <></>
            }
            
                <div className='flex p-5 justify-between items-center h-14 border-b border-neutral-100 shadow-md'>
                    <div className='text-slate-400'>
                        Hola bienvenido al modo {auth.user.name}
                    </div>
                    <div className='rounded-md px-2 font-bold text-slate-200 text-md border border-green-500'>
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
                <div className='flex  justify-center bg-slate-100 overflow-y-auto ' style={{height:'calc(100% - 112px)'}}>
                <div className='w-5/6'>
                 {children}
                 <div className='h-14 flex items-center justify-center text-slate-400 border-t-2 border-neutral-100'>
                   <div>
                    Copyrigth © OGSIC 2022 
                   </div>
                </div>
                </div>  
                </div>
                
            </div>
    </div>
    </>
  )
}

export default NavbarSAdmin