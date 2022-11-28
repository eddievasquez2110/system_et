import React from 'react'
import { useState } from 'react'
//mport { FaAngleRight} from "react-icons/fa";
import { Link } from '@inertiajs/inertia-react';

//import { faCirclePlay, faUser} from '@fortawesome/free-solid-svg-icons';

const Navbar = ({auth,children}) => {
    const [show,setShow] = useState(false);
    const [open,setOpen] =useState(true);
    const styleOpen = {
        display:"block"
    }
    const styleClose = {
        display:"none"
    }
    const alertLogout = (e) => {
        if(!confirm('Estas Seguro de salir del sistema')){
            return e.preventDefault();
        }else{
            return this;
        }
        /* e.preventDefault();
        e.stopPropagation();
        Swal.fire({
            title: 'Estas seguro?',
            text: "Usted saldra del sistema",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Salir'
          }).then((result) => { 
            if (!result.isConfirmed) {
              Swal.fire(
                'Logout!',
                'Saliste del sistema.',
                'success'
              )
            }
          }) */
    }

  return (
    <div className='flex w-full'>
        <div className="min-h-screen shadow-md bg-green-800 relative" style={open ?{width:'18%'}:{width:'75px'}}>
            <div className="pt-4 pb-2 px-6">
                <a href="#">
                <div className="flex cursor-auto items-center pb-4 border-b border-gray-200">
                    <div className="shrink-0">
                    <img src={"../images/Logo/Logo.png"} style={open ?{width:'75px'}:{width:'35px'}} alt="" />
                    </div>
                    <div className="grow ml-3 " style={open ? styleOpen : styleClose}>
                    <p className="text-sm font-semibold text-white">Sistema de <br />Especificaciones</p>
                    </div>
                </div>
                </a>
            </div>
            <div onClick={() => setOpen(!open)} className='absolute w-8 h-8 text-lg text-white cursor-pointer inset-y-1/2 -right-3 flex items-center justify-center rounded-full bg-teal-500'>
                {/* <FaAngleRight/> */}
                {/* <FontAwesomeIcon className="h-5 w-10"  icon={faCirclePlay} /> */}
            </div>

            <div className="overflow-y-auto py-4">
                <ul className="space-y-2">
                    <li className='px-3'>
                        
                        <Link href={route('admin')} active={route().current('admin')} className="flex items-center justify-center p-2 text-base font-normal text-white rounded-lg hover:text-green-700 hover:bg-green-50 focus:bg-green-50 focus:text-green-600 transition duration-300 ease-in-out">
                        <svg aria-hidden="true" className="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                        <span style={open ? styleOpen : styleClose} className="flex-1 ml-3 whitespace-nowrap">Dashboard</span>
                        </Link>
                        
                    </li>
                    <li className='px-3'>
                        <button href="#" onClick={()=>setShow(!show)} className="flex items-center justify-center w-full p-2 text-base font-normal text-white rounded-lg  hover:text-green-700 hover:bg-green-50 focus:bg-green-50 focus:text-green-600 transition duration-300 ease-in-out">
                        <svg aria-hidden="true" className="flex-shrink-0 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        <span style={open ? styleOpen : styleClose}  className="flex-1 ml-3 text-left whitespace-nowrap">Equipos</span>
                        {open && <svg  className="w-6 h-6" style={show?{transform: 'rotate(0deg)',}:{transform: 'rotate(180deg)'}} fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"></path></svg>}
                        </button>
                        <ul style={show?{display:"block"}:{display:"none"}} className="bg-white rounded-lg mt-1">
                            <li>
                            <Link href={route('d.tipoequipos')} active={route().current('d.tipoequipos')} className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-blue-600 hover:bg-green-100 transition duration-300 ease-in-out">
                                Tipo de Equipo
                            </Link>
                            </li>
                            <li>
                            <a href="#" className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out">Uso de Equipo</a>
                            </li>
                            <li>
                            <a href="#" className="flex items-center p-2 pl-11 w-full text-sm font-normal  rounded-lg hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out">Especificacion</a>
                            </li>
                        </ul>
                    </li>
                    <li className='px-3'>
                        <a href="#" onClick={()=>setShow(false)} className="flex items-center  justify-center p-2 text-base font-normal text-white rounded-lg  text-gray-700 rounded-lg  hover:text-green-700 hover:bg-green-50 focus:bg-green-50 focus:text-green-600 transition duration-300 ease-in-out">
                        <svg aria-hidden="true" className="flex-shrink-0 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path  d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path></svg>
                        <span style={open ? styleOpen : styleClose} className="flex-1 ml-3 whitespace-nowrap">Usuarios</span>
                        </a>
                    </li>
                    <li className='bottom-0  px-3 py-3  absolute  w-full' >
                        <Link onClick={(e) => alertLogout(e)} href={route('logout')} method="post" as="button"  className="flex items-center w-full text-left justify-center p-2 text-base font-normal text-white rounded-lg  hover:text-green-700 hover:bg-green-50 focus:bg-green-50 focus:text-green-600 transition duration-300 ease-in-out">
                        <svg aria-hidden="true" className="flex-shrink-0 w-6 h-6 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path  d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"></path></svg>
                        <span style={open ? styleOpen : styleClose} className="flex-1 ml-3  whitespace-nowrap">Salir</span>
                        </Link>
                    </li>
                    </ul>
            </div>
        </div>
            <div className='bg-white' style={open ?{width:'82%'}:{width:'95%'}}>
                <div className='flex p-5 justify-between items-center h-14 border-b border-neutral-100 shadow-md'>
                    <div className='text-slate-400'>
                        Hola bienvenido al modo {auth.user.ID_Rol}
                    </div>
                    <div className='rounded-md px-4 py-2 font-bold text-slate-500 text-xs border border-orange-500'>
                        {auth.user.name}
                    </div>
                </div>
                <div className='flex  justify-center bg-slate-100 overflow-y-auto ' style={{height:'calc(100% - 112px)'}}>
                <div className='w-5/6'>
                 {children}
                </div>  
                </div>
                <div className='h-14 flex items-center justify-center text-slate-400 border-t-2 border-neutral-100'>
                   <div>
                    Copyrigth © OGSIC 2022 
                   </div>
                </div>
            </div>
    </div>
  )
}

export default Navbar